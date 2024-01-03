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
Route::view('/admindashboard', "admin.maindashboard");
// Route::view('/allusers', "admin.allusers");
Route::get('/allusers',  [App\Http\Controllers\CustomControllerWithResource::class, 'index']);
Route::get('/edituser/{id}',  [App\Http\Controllers\CustomControllerWithResource::class, 'edit']);
Route::post('/updateuser/{id}',  [App\Http\Controllers\CustomControllerWithResource::class, 'update']);
// Route::delete('/deleteuser/{id}',  [App\Http\Controllers\CustomControllerWithResource::class, 'destroy']);
Route::any('/deleteuser/{id}',  [App\Http\Controllers\CustomControllerWithResource::class, 'destroy']);
Route::view('/middlewareexample','admin.checkprodquantity');
Route::any('/saveprodformiddle',[App\Http\Controllers\CustomControllerWithResource::class, 'middlwsuccess'])->middleware('checkquantity');

Route::view('/validate','admin.validateform');
Route::any('/checkvalidation',[App\Http\Controllers\CustomControllerWithResource::class, 'checkvalidation']);
Route::view('/custommacro','admin.custom_macro');

// Route::view('/', 'viewname');
// Route::get('/', function () { return view('welcome'); });
// Route::post('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::put('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::patch('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::delete('/', [App\Http\Controllers\Controller::class, 'method']);
// Route::resource('/', [App\Http\Controllers\Controller::class]);