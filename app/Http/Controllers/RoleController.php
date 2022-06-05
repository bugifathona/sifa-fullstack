<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('domains.sysadmin.credential.roles')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guardOptions= [
            (object) [
              'value' => 'web',
              'name' => 'web'
            ],
            (object) [
              'value' => 'api',
              'name' => 'api'
            ]
        ];

        return view('domains.sysadmin.credential.roles-create')->with('guardOptions', $guardOptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->guard_name);
        $request->validate([
            'name' => 'required|unique:roles,name',
            'guard_name' => 'required'
        ]);

        $role = Role::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);

        return redirect()->route('sysadmin.credential.roles.index')->with('created', $role->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);

        return view('domains.sysadmin.credential.roles-show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);

        $guardOptions= [
            (object) [
              'value' => 'web',
              'name' => 'web'
            ],
            (object) [
              'value' => 'api',
              'name' => 'api'
            ]
        ];

        return view('domains.sysadmin.credential.roles-edit')->with('role', $role)->with('guardOptions', $guardOptions);
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
        $request->validate([
            'name' => 'required',
            'guard_name' => 'required'
        ]);

        $role = Role::find($id);

        $role->name = $request->name;
        $role->guard_name = $request->guard_name;
        $role->save();

        return redirect()->route('sysadmin.credential.roles.index')
            ->with('updated', $role->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect()->route('sysadmin.credential.roles.index')
            ->with('deleted', $role->name);
    }
}
