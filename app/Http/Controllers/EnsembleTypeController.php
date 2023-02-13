<?php

namespace App\Http\Controllers;

use App\Http\Resources\EnsembleTypeResource;
use App\Models\EnsembleType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EnsembleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return EnsembleTypeResource::collection(EnsembleType::all());
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
     * @param EnsembleType $ensembleType
     * @return EnsembleTypeResource
     */
    public function show(EnsembleType $ensembleType): EnsembleTypeResource
    {
        return new EnsembleTypeResource($ensembleType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EnsembleType  $ensembleType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnsembleType $ensembleType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnsembleType  $ensembleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnsembleType $ensembleType)
    {
        //
    }
}
