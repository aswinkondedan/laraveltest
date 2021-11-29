<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\TryController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

Route::post('/',[StudentController::class,'create']);
Route::get('/',[StudentController::class,'index']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::put('/edit/{id}',[StudentController::class,'update']);
Route::get('/delete/{id}',[StudentController::class,'destroy']);



Route::get('/design', function () {
    return view('design');
});














