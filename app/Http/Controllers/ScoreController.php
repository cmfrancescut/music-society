<?php

namespace App\Http\Controllers;

use App\Http\Resources\InstrumentScoreResource;
use App\Http\Resources\ScoreResource;
use App\Models\InstrumentScore;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return ScoreResource::collection(Score::all());
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
     * @param  \App\Models\Score  $score
     * @return ScoreResource
     */
    public function show(Score $score)
    {
        return new ScoreResource($score);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }

    /**
     * Returns a JSON object of the instrumentation for the provided score.
     *
     * @param Request $request
     * @param string $id
     * @return AnonymousResourceCollection
     */
    public function getInstrumentation(Request $request, string $id) : AnonymousResourceCollection
    {
        $instruments = InstrumentScore::where('score_id', $id)
            ->get();

        return InstrumentScoreResource::collection($instruments);
    }
}
