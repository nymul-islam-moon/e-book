<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;

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
Route::get('/subscription', [SubscriptionController::class, 'index'])->name('home');

Route::controller(SubscriptionController::class)->prefix('subscription')->group(function () {
    Route::get('/', 'index')->name('front.subscription.index');
    Route::get('/create', 'create')->name('front.subscription.create');
    Route::post('/store', 'store')->name('front.subscription.store');
    Route::get('/{subscription}/edit', 'edit')->name('front.subscription.edit');
    Route::put('/{subscription}/update', 'update')->name('front.subscription.update');
    Route::post('/{subscription}/active', 'active')->name('front.subscription.active');
    Route::post('/{subscription}/de-active', 'deactive')->name('front.subscription.deactive');
    Route::delete('/{subscription}/destroy', 'destroy')->name('front.subscription.destroy');
    Route::post('/{subscription}/restore', 'restore')->name('front.subscription.restore');
    Route::delete('/{subscription}/force-delete', 'forceDelete')->name('front.subscription.forcedelete');
    Route::delete('/destroy-all', 'destroyAll')->name('front.subscription.destroyAll');
    Route::delete('/permanent-destroy-all', 'permanentDestroyAll')->name('front.subscription.permanentDestroyAll');
    Route::delete('/restore-all', 'restoreAll')->name('front.subscription.restoreAll');
});
