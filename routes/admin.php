<?php

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

Route::post('/',function (){
   return view('admin.index');
});

Route::controller(CategoriesController::class)->group(function () {
    Route::get('/categories', 'index')->name('categories.index');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get('/articles' , 'index')->name('articles.index');
    Route::get('/articles/create', 'create')->name('articles.create');

    Route::get('/articles/{article}', 'show')->name('articles.show');
});




