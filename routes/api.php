<?php

use Illuminate\Http\Request;
use App\Http\Controllers\EigoMondaiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('eigo-mondai/{pageNo}', 'EigoMondaiController@show');
Route::get('eigo-mondai-info', 'EigoMondaiController@showInfo');