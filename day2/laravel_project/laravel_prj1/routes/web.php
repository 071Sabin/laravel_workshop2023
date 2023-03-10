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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return view('abc');
});

//accessing show and register functions from HomeController.php and UserController.php
Route::get('/home', [App\Http\Controllers\HomeController::class, "showhome"]);
Route::get('/register', [App\Http\Controllers\UserController::class, "register"]);