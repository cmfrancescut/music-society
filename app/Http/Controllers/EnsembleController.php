<?php

namespace App\Http\Controllers;

use App\Http\Resources\EnsembleResource;
use App\Models\Ensemble;
use Illuminate\Http\Request;

class EnsembleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EnsembleResource::collection(Ensemble::all());
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
     * @param  \App\Models\Ensemble  $ensemble
     * @return \Illuminate\Http\Response
     */
    public function show(Ensemble $ensemble)
    {
        return new EnsembleResource($ensemble);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ensemble  $ensemble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ensemble $ensemble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ensemble  $ensemble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ensemble $ensemble)
    {
        //
    }
}
