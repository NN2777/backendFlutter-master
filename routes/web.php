<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/notes', [NoteController::class,'index']);
Route::get('/notes/create', [NoteController::class,'create']);
Route::post('/notes', [NoteController::class,'store']);
Route::get('/notes/{id}/edit', [NoteController::class,'edit']);
Route::put('/notes/{id}', [NoteController::class,'update']);
Route::delete('/notes/{id}',[NoteController::class,'destroy']);