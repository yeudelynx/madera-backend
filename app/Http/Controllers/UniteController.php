<?php

namespace App\Http\Controllers;

use App\Unite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UniteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Unite::all();
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
     * @param  \App\Unite  $unite
     * @return \Illuminate\Http\Response
     */
    public function show(Unite $unite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unite  $unite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unite $unite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unite  $unite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unite $unite)
    {
        //
    }
}
