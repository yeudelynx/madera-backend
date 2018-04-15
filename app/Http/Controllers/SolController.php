<?php

namespace App\Http\Controllers;

use App\Sol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sol::all();
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
     * @param  \App\Sol  $sol
     * @return \Illuminate\Http\Response
     */
    public function show(Sol $sol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sol  $sol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sol $sol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sol  $sol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sol $sol)
    {
        //
    }
}
