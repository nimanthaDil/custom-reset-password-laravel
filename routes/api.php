<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('password/email', 'ForgotPasswordController@forgot');
//Route::post('password/reset', 'ForgotPasswordController@reset');

//Use above 2 routes if below routes not worked.
Route::post('password/email', [App\Http\Controllers\ForgotPasswordController::class, 'forgot']);
Route::post('password/reset', [App\Http\Controllers\ForgotPasswordController::class, 'reset']);
