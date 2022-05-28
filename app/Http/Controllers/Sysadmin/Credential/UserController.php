<?php

namespace App\Http\Controllers\Sysadmin\Credential;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();

        return view('domains.sysadmin.credential.users')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        foreach ($roles as $role) {
            $roleOptions[] = (object)[
                'value' => $role->name,
                'name' => str($role->name)->title()
            ];
        }

        return view('domains.sysadmin.credential.users-create')->with('roleOptions',$roleOptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole($request->role);

        return redirect()->route('sysadmin.credential.users.index')
            ->with('created', $user->username);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('domains.sysadmin.credential.users-show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $roles = Role::all();

        foreach ($roles as $role) {
            $roleOptions[] = (object)[
                'value' => $role->name,
                'name' => str($role->name)->title()
            ];
        }

        return view('domains.sysadmin.credential.users-edit')->with('user', $user)->with('roleOptions', $roleOptions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->password == '') {

            $request->validate([
                'username' => 'required|unique:users,username,' . $id,
                'role' => 'required',
            ]);

            $user->username = $request->username;
            $user->save();
            $user->syncRoles($request->role);
        }
        else {
            $request->validate([
                'username' => 'required|unique:users,username,' . $id,
                'password' => 'min:6',
                'role' => 'required',
            ]);

            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->save();
            $user->syncRoles($request->role);
        }

        return redirect()->route('sysadmin.credential.users.index')
            ->with('updated', $user->username);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $deleted = $user;
        $user->delete();

        return redirect()->route('sysadmin.credential.users.index')->with('deleted', $deleted->username);
    }
}
