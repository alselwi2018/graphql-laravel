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
//save to database
Route::get('/breed/create', [App\Http\Controllers\BreedController::class,'create'])->name('breed.create');
Route::post('/breed/store', [App\Http\Controllers\BreedController::class,'store'])->name('breed.store');

//urls gets
Route::get('/breed/random', [App\Http\Controllers\BreedController::class,'randomImage']);
Route::get('/breed/{id}/image', [App\Http\Controllers\BreedController::class,'byBreed']);
Route::get('/breed/{id}', [App\Http\Controllers\BreedController::class,'byBreed']);
Route::get('/breed', [App\Http\Controllers\BreedController::class,'getBreed']);



