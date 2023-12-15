<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/otherpage', "01route");
// Route::get('/allproducts', function () { dd("route working"); });
Route::get('/allproducts', [App\Http\Controllers\ProductController::class, 'index']);
// Route::any('/addnewprod', [App\Http\Controllers\ProductController::class, 'index']);
Route::view('/addnewprod', 'addnewproduct');
Route::post('/saveproduct', [App\Http\Controllers\ProductController::class, 'store']);
// Route::delete('/deleteproduct/{id}', [App\Http\Controllers\ProductController::class, 'store']);
Route::any('/deleteproduct/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

// Route::view('/', 'viewname');
// Route::get('/', function () { return view('welcome'); });
// Route::post('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::put('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::patch('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::delete('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::resource('/', [App\Http\Controllers\Controller::class]);