<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManegementController;

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

Route::get('/', [ManegementController::class,'index'])->name('inquiry.index');
Route::post('/confirm', [ManegementController::class,'confirm'])->name('inquiry.confirm');
Route::post('/create', [ManegementController::class,'create'])->name('inquiry.create');
Route::get('/find', [ManegementController::class,'find'])->name('inquiry.find');
Route::post('/delete', [ManegementController::class,'delete'])->name('inquiry.delete');
Route::get('/search', [ManegementController::class,'search'])->name('inquiry.search');
