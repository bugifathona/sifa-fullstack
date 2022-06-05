<?php

namespace App\Http\Controllers;

use App\Models\RefClassGrade;
use App\Models\RefEducationLevel;
use Illuminate\Http\Request;

class RefClassGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_grades = RefClassGrade::with('refEducationLevel')->get();

        return view('domains.sysadmin.reference.class-grades')
            ->with('class_grades', $class_grades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $education_levels = RefEducationLevel::all();

        foreach ($education_levels as $education_level) {
            $education_level_options[] = (object) [
                'value' => $education_level->id,
                'name' => $education_level->name,
            ];
        }

        return view('domains.sysadmin.reference.class-grades-create')
            ->with('education_level_options', $education_level_options);
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
            'name' => 'required',
            'alias' => 'required',
            'ref_education_level_id' => 'required|numeric',
        ]);

        $class_grade = RefClassGrade::create($request->all());

        return redirect()->route('sysadmin.reference.class-grades.index')
            ->with('created', $class_grade->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class_grade = RefClassGrade::with('refEducationLevel')->find($id);

        return view('domains.sysadmin.reference.class-grades-show')
            ->with('class_grade', $class_grade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class_grade = RefClassGrade::with('refEducationLevel')->find($id);

        $education_levels = RefEducationLevel::all();

        foreach ($education_levels as $education_level) {
            $education_level_options[] = (object) [
                'value' => $education_level->id,
                'name' => $education_level->name,
            ];
        }
        return view('domains.sysadmin.reference.class-grades-edit')
            ->with('class_grade', $class_grade)
            ->with('education_level_options', $education_level_options);
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
        //dd($request->all());

        $class_grade = RefClassGrade::find($id);

        $request->validate([
            'name' => 'required',
            'alias' => 'required',
            'ref_education_level_id' => 'required|numeric',
        ]);

        $class_grade->fill($request->all())->save();

        return redirect()->route('sysadmin.reference.class-grades.index')
            ->with('updated', $class_grade->name);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class_grade = RefClassGrade::find($id);
        $class_grade->delete();

        return redirect()->route('sysadmin.reference.class-grades.index')
            ->with('deleted', $class_grade->name);
    }
}
