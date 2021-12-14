<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteApiController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
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

// Route::get('/notes', [NoteApiController::class,'index']);
//     //Route::get('/notes/create', [NoteApiController::class,'create']);
//     Route::post('/notes', [NoteApiController::class,'store']);
//     //Route::get('/notes/{id}/edit', [NoteApiController::class,'edit']);
//     Route::get('/notes/{id}', [NoteApiController::class,'show']);
//     Route::put('/notes/{id}', [NoteApiController::class,'update']);
//     Route::delete('/notes/{id}',[NoteApiController::class,'destroy']);




Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/notes', [NoteApiController::class,'index']);
    //Route::get('/notes/create', [NoteApiController::class,'create']);
    Route::post('/notes', [NoteApiController::class,'store']);
    //Route::get('/notes/{id}/edit', [NoteApiController::class,'edit']);
    Route::get('/notes/{id}', [NoteApiController::class,'show']);
    Route::put('/notes/{id}', [NoteApiController::class,'update']);
    Route::delete('/notes/{id}',[NoteApiController::class,'destroy']);
});

Route::post('/auth/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/auth/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/auth/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);