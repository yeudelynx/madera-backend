<?php

namespace App\Http\Controllers;

use App\Gamme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Gamme::all();
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
     * @param  \App\Gamme  $gamme
     * @return \Illuminate\Http\Response
     */
    public function show(Gamme $gamme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gamme  $gamme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gamme $gamme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gamme  $gamme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gamme $gamme)
    {
        //
    }
}
