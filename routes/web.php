<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompteController;
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


Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

Route::get('/dashboard/list-comptes',[CompteController::class,'index'])->name('list-comptes');
