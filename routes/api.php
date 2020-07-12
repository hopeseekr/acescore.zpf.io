<?php

use App\Http\Controllers\AceScoreController;
use App\Http\Controllers\QuizController;
use Illuminate\Http\Request;

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

Route::get('/quiz/',             [QuizController::class, 'index']);
Route::get('/quiz/{questionId}', [QuizController::class, 'show']);
Route::post('/aceScore',         [AceScoreController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
