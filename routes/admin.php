<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(CategoriesController::class)->group(function () {
    Route::get('/categories', 'index')->name('categories.index');
});

Route::controller(ArticleController::class)->group(function () {

    Route::get('/articles' , 'index')->name('articles.index');

    Route::get('/articles/create', 'create')->name('articles.create');

    Route::post('/' , 'store')->name('articles.store');

    Route::get('/articles/{article}/edit' , 'edit')->name('articles.edit');

    Route::put('/articles/{article}' , 'update')->name('articles.update');

    Route::delete('/articles/{article}' , 'destroy')->name('articles.destroy');

    Route::get('/articles/{article}', 'show')->name('articles.show');
});




