<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookCategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::middleware(['is_admin'])->prefix('admin')->group(function () {

    Route::get('/home', [AdminController::class, 'admin'])->name('admin.home');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::controller(BookCategoryController::class)->prefix('book/category')->group(function () {
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

    Route::controller(SubCategoryController::class)->prefix('product/sub-category')->group(function () {
        Route::get('/', 'index')->name('product.subCategory.index');
        Route::get('/create', 'create')->name('product.subCategory.create');
        Route::post('/store', 'store')->name('product.subCategory.store');
        Route::get('/{subCategory}/edit', 'edit')->name('product.subCategory.edit');
        Route::put('/{subCategory}/update', 'update')->name('product.subCategory.update');
        Route::post('/{subCategory}/active', 'active')->name('product.subCategory.active');
        Route::post('/{subCategory}/de-active', 'deactive')->name('product.subCategory.deactive');
        Route::delete('/{subCategory}/destroy', 'destroy')->name('product.subCategory.destroy');
        Route::post('/{subCategory}/restore', 'restore')->name('product.subCategory.restore');
        Route::delete('/{subCategory}/force-delete', 'forceDelete')->name('product.subCategory.forcedelete');
        Route::delete('/destroy-all', 'destroyAll')->name('product.subCategory.destroyAll');
        Route::delete('/permanent-destroy-all', 'permanentDestroyAll')->name('product.subCategory.permanentDestroyAll');
        Route::delete('/restore-all', 'restoreAll')->name('product.subCategory.restoreAll');
        Route::get('/get-data', 'getAllData')->name('product.subCategory.getAllData');
    });

    Route::get('/test', function () {
        return view('admin.test.index');
    });

});
