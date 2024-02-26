<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BooksCategoryController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::middleware(['is_admin'])->prefix('admin')->group(function () {

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

    Route::get('/test', function () {
        return view('admin.test.index');
    });

});
