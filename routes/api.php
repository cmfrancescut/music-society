<?php

use App\Http\Controllers\ComposerController;
use App\Http\Controllers\EnsembleController;
use App\Http\Controllers\EnsembleTypeController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\InstrumentScoreController;
use App\Http\Controllers\MusicCheckoutController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\RehearsalController;
use App\Http\Controllers\ScoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API Resources
Route::apiResource('ensemble_type', EnsembleTypeController::class);
Route::apiResource('ensemble', EnsembleController::class);
Route::apiResource('composer', ComposerController::class);
Route::apiResource('instrument', InstrumentController::class);
Route::apiResource('instrument_score', InstrumentScoreController::class);
Route::apiResource('music_checkout', MusicCheckoutController::class);
Route::apiResource('publisher', PublisherController::class);
Route::apiResource('rehearsal', RehearsalController::class);
Route::apiResource('score', ScoreController::class);
