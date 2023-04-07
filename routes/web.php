<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProfilesControllers;
use App\Http\Controllers\BookControllers;


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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile', [ProfilesControllers::class, 'index'])->name('profile');

Route::post('/addbook', [BookControllers::class, 'addbook'])->name('addbook');

Route::get('/delete/{id}', [BookControllers::class, 'deletebook'])->name('deletebook');

Route::get('/update/{id}', [BookControllers::class, 'updatebookshow'])->name('updatebookshow');

Route::post('/update/{id}/update', [BookControllers::class, 'updatebook'])->name('updatebook');

