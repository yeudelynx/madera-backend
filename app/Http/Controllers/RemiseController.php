<?php

namespace App\Http\Controllers;

use App\Remise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RemiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Remise::all();
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
     * @param  \App\Remise  $remise
     * @return \Illuminate\Http\Response
     */
    public function show(Remise $remise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Remise  $remise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remise $remise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Remise  $remise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remise $remise)
    {
        //
    }
}
