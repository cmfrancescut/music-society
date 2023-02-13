<?php

namespace App\Http\Controllers;

use App\Http\Resources\MusicCheckoutResource;
use App\Models\MusicCheckout;
use Illuminate\Http\Request;

class MusicCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MusicCheckoutResource::collection(MusicCheckout::all());
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
     * @param  \App\Models\MusicCheckout  $musicCheckout
     * @return \Illuminate\Http\Response
     */
    public function show(MusicCheckout $musicCheckout)
    {
        return new MusicCheckoutResource($musicCheckout);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MusicCheckout  $musicCheckout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MusicCheckout $musicCheckout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MusicCheckout  $musicCheckout
     * @return \Illuminate\Http\Response
     */
    public function destroy(MusicCheckout $musicCheckout)
    {
        //
    }
}
