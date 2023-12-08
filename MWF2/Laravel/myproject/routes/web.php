<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/otherpage', "01route");

// Route::view('/', 'viewname');
// Route::get('/', function () { return view('welcome'); });
// Route::post('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::put('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::patch('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::delete('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::resource('/', [App\Http\Controllers\Controller::class]);