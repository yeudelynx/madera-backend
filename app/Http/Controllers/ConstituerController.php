<?php

namespace App\Http\Controllers;

use App\Constituer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConstituerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Constituer::all();
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
     * @param  \App\Constituer  $constituer
     * @return \Illuminate\Http\Response
     */
    public function show(Constituer $constituer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Constituer  $constituer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constituer $constituer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constituer  $constituer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constituer $constituer)
    {
        //
    }
}
