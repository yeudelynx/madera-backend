<?php

namespace App\Http\Controllers;

use App\Couleur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Couleur::all();
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
     * @param  \App\Couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function show(Couleur $couleur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Couleur $couleur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Couleur $couleur)
    {
        //
    }
}
