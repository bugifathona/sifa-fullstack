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
        return view('domains.sysadmin.reference.education-levels');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefEducationLevel  $refEducationLevel
     * @return \Illuminate\Http\Response
     */
    public function show(RefEducationLevel $refEducationLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RefEducationLevel  $refEducationLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(RefEducationLevel $refEducationLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RefEducationLevel  $refEducationLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RefEducationLevel $refEducationLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefEducationLevel  $refEducationLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RefEducationLevel $refEducationLevel)
    {
        //
    }
}
