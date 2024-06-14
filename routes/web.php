<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' ,[\App\Http\Controllers\Controller::class, "index"]);

Route::get('/delete', [\App\Http\Controllers\deleteController::class, "delete"]);

Route::get('/add', [\App\Http\Controllers\addnewController::class, "add"]);

Route::post('/submit', [\App\Http\Controllers\addNewControllerprocess::class, "insert"]);
