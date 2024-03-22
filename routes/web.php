<?php

use App\Http\Controllers\Admin\BooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::controller(RegistrationController::class)->prefix('registration')->group(function () {
    Route::get('/', 'index')->name('front.registration.index');
    Route::get('/create', 'create')->name('front.registration.create');
    Route::post('/store', 'store')->name('front.registration.store');
});

Route::controller(BooksController::class)->prefix('book/show')->group(function () {
    Route::get('/{book}/show', 'show')->name('front.book.show');
});
