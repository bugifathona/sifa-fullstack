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
        $options = [
            (object) [
                'value' => 1,
                'label' => 'Active',
            ],
        ];

        return view('domains.sysadmin.reference.branches-create')->with('options', $options);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());

        $request->validate([
            'name' => 'required',
            'number_code' => 'required|digits:2',
            'alpha_code' => 'required|alpha|size:3',
            'address' => 'required',
            'subdistrict' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'is_active' => 'required|boolean',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefBranch  $refBranch
     * @return \Illuminate\Http\Response
     */
    public function show(RefBranch $refBranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RefBranch  $refBranch
     * @return \Illuminate\Http\Response
     */
    public function edit(RefBranch $refBranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RefBranch  $refBranch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RefBranch $refBranch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefBranch  $refBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(RefBranch $refBranch)
    {
        //
    }
}
