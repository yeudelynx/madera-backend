<?php

namespace App\Http\Controllers;

use App\Magasin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MagasinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Magasin::all();
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
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function show(Magasin $magasin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magasin $magasin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magasin $magasin)
    {
        //
    }
}
