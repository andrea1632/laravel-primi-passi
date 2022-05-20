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

    $data = [
        'message' => 'Hello World!'
    ];
    return view('home', $data);
})->name('home');

Route::get('/links', function(){
    return view('links');
})->name('links');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/welcome', function(){
    return view('welcome');
})->name('welcome');
