<?php

namespace App\Http\Controllers;

use App\Http\Resources\InstrumentScoreResource;
use App\Models\InstrumentScore;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InstrumentScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return InstrumentScoreResource::collection(InstrumentScore::all());
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
     * @param  \App\Models\InstrumentScore  $instrumentScore
     * @return \Illuminate\Http\Response
     */
    public function show(InstrumentScore $instrumentScore)
    {
        return new InstrumentScoreResource($instrumentScore);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstrumentScore  $instrumentScore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstrumentScore $instrumentScore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstrumentScore  $instrumentScore
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstrumentScore $instrumentScore)
    {
        //
    }
}
