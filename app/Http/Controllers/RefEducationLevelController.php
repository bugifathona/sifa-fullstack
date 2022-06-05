<?php

namespace App\Http\Controllers;

use App\Models\RefEducationLevel;
use Illuminate\Http\Request;

class RefEducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education_levels = RefEducationLevel::all();

        return view('domains.sysadmin.reference.education-levels')
            ->with('education_levels', $education_levels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('domains.sysadmin.reference.education-levels-create');
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
            'name' => 'required|unique:ref_education_levels,name',
            'number_code' => 'required|digits:2|unique:ref_education_levels,number_code',
        ]);

        $education_level = RefEducationLevel::create($request->all());

        return redirect()->route('sysadmin.reference.education-levels.index')
            ->with('created', $education_level->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $education_level = RefEducationLevel::find($id);

        return view('domains.sysadmin.reference.education-levels-show')
            ->with('education_level', $education_level);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education_level = RefEducationLevel::find($id);

        return view('domains.sysadmin.reference.education-levels-edit')
            ->with('education_level', $education_level);
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
        $education_level = RefEducationLevel::find($id);

        $request->validate([
            'name' => 'required|unique:ref_education_levels,name,' . $id,
            'number_code' => 'required|digits:2|unique:ref_education_levels,number_code,' . $id,
        ]);

        $education_level->fill($request->all())->save();

        return redirect()->route('sysadmin.reference.education-levels.index')
            ->with('updated', $education_level->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education_level = RefEducationLevel::find($id);
        $education_level->delete();

        return redirect()->route('sysadmin.reference.education-levels.index')
            ->with('deleted', $education_level->name);
    }
}
