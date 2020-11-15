<?php

use App\Http\Controllers\BookController;
use App\Http\Middleware\CheckUserType;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([CheckUserType::class, 'auth'])->group(function () {
    Route::post('/add-book', [BookController::class, 'store'])->name('store.book');
});

Route::get('/add-book', [BookController::class, 'create'])->name('create.book');


