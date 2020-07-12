<?php declare(strict_types=1);

/**
 * This file is part of acescore.zpf.io, one of HopeSeekr's Project.
 *
 * Copyright © 2020 PHP Experts, Inc.
 * Author: Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://github.com/hopeseekr/acescore.zpf.io
 *
 * This file is licensed under the MIT License.
 */

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

Route::get('/quiz/', [QuizController::class, 'index']);
Route::get('/quiz/{questionId}', [QuizController::class, 'show']);
Route::post('/aceScore', [AceScoreController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
