<?php

namespace App\Http\Controllers;

use App\Http\Resources\RehearsalResource;
use App\Models\Rehearsal;
use Illuminate\Http\Request;

class RehearsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RehearsalResource::collection(Rehearsal::all());
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
     * @param  \App\Models\Rehearsal  $rehearsal
     * @return \Illuminate\Http\Response
     */
    public function show(Rehearsal $rehearsal)
    {
        return new RehearsalResource($rehearsal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rehearsal  $rehearsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rehearsal $rehearsal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rehearsal  $rehearsal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rehearsal $rehearsal)
    {
        //
    }
}
