<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComposerResource;
use App\Models\Composer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ComposerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ComposerResource::collection(Composer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Composer  $composer
     * @return Response
     */
    public function show(Composer $composer)
    {
        return new ComposerResource($composer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Composer  $composer
     * @return Response
     */
    public function update(Request $request, Composer $composer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Composer  $composer
     * @return Response
     */
    public function destroy(Composer $composer)
    {
        //
    }
}
