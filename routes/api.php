<?php

use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\FormQuestionController;
use App\Http\Controllers\Api\FormQuestionOptionController;
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

Route::apiResource('forms', FormController::class);
Route::apiResource('questions', FormQuestionController::class);
Route::apiResource('options', FormQuestionOptionController::class);
