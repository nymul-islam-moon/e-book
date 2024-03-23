<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BooksCategoryController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\BuySubscriptionController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::middleware(['canLogin'])->prefix('admin')->group(function () {

    Route::get('/home', [AdminController::class, 'admin'])->name('admin.home');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::controller(BooksCategoryController::class)->prefix('books/category')->group(function () {
        Route::get('/', 'index')->name('book.category.index');
        Route::get('/create', 'create')->name('book.category.create');
        Route::post('/store', 'store')->name('book.category.store');
        Route::get('/{bookCategory}/edit', 'edit')->name('book.category.edit');
        Route::put('/{bookCategory}/update', 'update')->name('book.category.update');
        Route::post('/{bookCategory}/active', 'active')->name('book.category.active');
        Route::post('/{bookCategory}/de-active', 'deactive')->name('book.category.deactive');
        Route::delete('/{bookCategory}/destroy', 'destroy')->name('book.category.destroy');
        Route::post('/{bookCategory}/restore', 'restore')->name('book.category.restore');
        Route::delete('/{bookCategory}/force-delete', 'forceDelete')->name('book.category.forcedelete');
        Route::delete('/destroy-all', 'destroyAll')->name('book.category.destroyAll');
        Route::delete('/permanent-destroy-all', 'permanentDestroyAll')->name('book.category.permanentDestroyAll');
        Route::delete('/restore-all', 'restoreAll')->name('book.category.restoreAll');
        Route::get('/get-data', 'getAllData')->name('book.category.getAllData');
    });

    Route::controller(BooksController::class)->prefix('books')->group(function () {
        Route::get('/', 'index')->name('admin.books.index');
        Route::get('/create', 'create')->name('admin.books.create');
        Route::post('/store', 'store')->name('admin.books.store');
        Route::get('/{books}/edit', 'edit')->name('admin.books.edit');
        Route::put('/{books}/update', 'update')->name('admin.books.update');
        Route::post('/{books}/active', 'active')->name('admin.books.active');
        Route::post('/{books}/de-active', 'deactive')->name('admin.books.deactive');
        Route::delete('/{books}/destroy', 'destroy')->name('admin.books.destroy');
        Route::post('/{books}/restore', 'restore')->name('admin.books.restore');
        Route::delete('/{books}/force-delete', 'forceDelete')->name('admin.books.forcedelete');
        Route::delete('/destroy-all', 'destroyAll')->name('admin.books.destroyAll');
        Route::delete('/permanent-destroy-all', 'permanentDestroyAll')->name('admin.books.permanentDestroyAll');
        Route::delete('/restore-all', 'restoreAll')->name('admin.books.restoreAll');
    });

    Route::controller(UsersController::class)->prefix('users')->group(function () {
        Route::get('/', 'index')->name('admin.users.index');
        Route::get('/create', 'create')->name('admin.users.create');
        Route::post('/store', 'store')->name('admin.users.store');
        Route::get('/{users}/edit', 'edit')->name('admin.users.edit');
        Route::put('/{users}/update', 'update')->name('admin.users.update');
        Route::post('/{users}/active', 'active')->name('admin.users.active');
        Route::post('/{users}/de-active', 'deactive')->name('admin.users.deactive');
        Route::delete('/{users}/destroy', 'destroy')->name('admin.users.destroy');
        Route::post('/{users}/restore', 'restore')->name('admin.users.restore');
        Route::delete('/{users}/force-delete', 'forceDelete')->name('admin.users.forcedelete');
        Route::delete('/destroy-all', 'destroyAll')->name('admin.users.destroyAll');
        Route::delete('/permanent-destroy-all', 'permanentDestroyAll')->name('admin.users.permanentDestroyAll');
        Route::delete('/restore-all', 'restoreAll')->name('admin.users.restoreAll');
    });


    Route::controller(BuySubscriptionController::class)->prefix('buy/subscription')->group(function () {
        Route::get('/', 'index')->name('admin.buySubscription.index');
        Route::get('/create', 'create')->name('admin.buySubscription.create');
        Route::post('/store', 'store')->name('admin.buySubscription.store');
        Route::get('/{buySubscription}/edit', 'edit')->name('admin.buySubscription.edit');
        Route::put('/{buySubscription}/update', 'update')->name('admin.buySubscription.update');
        Route::post('/{buySubscription}/active', 'active')->name('admin.buySubscription.active');
        Route::post('/{buySubscription}/de-active', 'deactive')->name('admin.buySubscription.deactive');
        Route::delete('/{buySubscription}/destroy', 'destroy')->name('admin.buySubscription.destroy');
        Route::post('/{buySubscription}/restore', 'restore')->name('admin.buySubscription.restore');
        Route::delete('/{buySubscription}/force-delete', 'forceDelete')->name('admin.buySubscription.forcedelete');
        Route::delete('/destroy-all', 'destroyAll')->name('admin.buySubscription.destroyAll');
        Route::delete('/permanent-destroy-all', 'permanentDestroyAll')->name('admin.buySubscription.permanentDestroyAll');
        Route::delete('/restore-all', 'restoreAll')->name('admin.buySubscription.restoreAll');
    });


    Route::controller(ProfileController::class)->prefix('profile')->group(function () {
        Route::get('/', 'index')->name('admin.profile.index');
        Route::get('/create', 'create')->name('admin.profile.create');
        Route::post('/store', 'store')->name('admin.profile.store');
        Route::get('/{profile}/edit', 'edit')->name('admin.profile.edit');
        Route::put('/{profile}/update', 'update')->name('admin.profile.update');
        Route::post('/{profile}/active', 'active')->name('admin.profile.active');
        Route::post('/{profile}/de-active', 'deactive')->name('admin.profile.deactive');
        Route::delete('/{profile}/destroy', 'destroy')->name('admin.profile.destroy');
        Route::post('/{profile}/restore', 'restore')->name('admin.profile.restore');
        Route::delete('/{profile}/force-delete', 'forceDelete')->name('admin.profile.forcedelete');
        Route::delete('/destroy-all', 'destroyAll')->name('admin.profile.destroyAll');
        Route::delete('/permanent-destroy-all', 'permanentDestroyAll')->name('admin.profile.permanentDestroyAll');
        Route::delete('/restore-all', 'restoreAll')->name('admin.profile.restoreAll');
    });



    Route::get('/test', function () {
        return view('admin.test.index');
    });

});
