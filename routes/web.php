<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/getUsers',[\App\Http\Controllers\UserChooseController::class,'getUsers']);





Route::get('/sendMessage',[\App\Http\Controllers\UserChooseController::class,'sendMessage'])->name('send');
