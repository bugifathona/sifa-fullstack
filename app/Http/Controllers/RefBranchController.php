<?php

namespace App\Http\Controllers;

use App\Models\RefBranch;
use Illuminate\Http\Request;

class RefBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = RefBranch::all();

        //dd($branches);

        return view('domains.sysadmin.reference.branches')
            ->with('branches', $branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeOptions = [
            (object) [
                'value' => 1,
                'label' => 'Active',
                'checked' => 1,
            ],
        ];

        return view('domains.sysadmin.reference.branches-create')->with('activeOptions', $activeOptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required|unique:ref_branches,name',
            'number_code' => 'required|numeric|digits:2|unique:ref_branches,number_code',
            'alpha_code' => 'required|alpha|size:3|unique:ref_branches,alpha_code',
            'address' => 'required',
            'subdistrict' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'phone' => '',
            'email' => 'email',
            'is_active' => 'required|boolean',
        ]);

        $branch = RefBranch::create($request->all());

        return redirect()->route('sysadmin.reference.branches.index')
        ->with('created', $branch->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = RefBranch::find($id);

        return view('domains.sysadmin.reference.branches-show')->with('branch', $branch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = RefBranch::find($id);

        $activeOptions = [
            (object) [
                'value' => 1,
                'label' => 'Active',
                'checked' => $branch->is_active,
            ]
        ];

        return view('domains.sysadmin.reference.branches-edit')
            ->with('branch', $branch)
            ->with('activeOptions', $activeOptions);
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
        $branch = RefBranch::find($id);

        //dd($request->all());

        $request->validate([
            'name' => 'required|unique:ref_branches,name,' . $id,
            'number_code' => 'required|numeric|digits:2|unique:ref_branches,number_code,' . $id,
            'alpha_code' => 'required|alpha|size:3|unique:ref_branches,alpha_code,' . $id,
            'address' => 'required',
            'subdistrict' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'phone' => '',
            'email' => 'email',
            'is_active' => 'required|boolean',
        ]);

        $branch->fill($request->all())->save();

        return redirect()->route('sysadmin.reference.branches.index')
            ->with('updated', $branch->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = RefBranch::find($id);
        $branch->delete();

        return redirect()->route('sysadmin.reference.branches.index')
            ->with('deleted', $branch->name);
    }

    /**
     * Toggle the specified resource status in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleActive(Request $request, $id)
    {
        $branch = RefBranch::find($id);

        $branch->is_active = !$branch->is_active;

        $branch->save();

        return redirect()->route('sysadmin.reference.branches.index');
    }

}
