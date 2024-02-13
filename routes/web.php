<?php

use App\Http\Controllers\DashboardController;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('admin.index');
});

Route::get('/profile', function () {
    return view('admin.profile.index');
})->name('profile.index');

Route::get('/signup', function () {
    return view('admin.signup.index');
})->name('signup.index');

Route::get('/login', function () {
    return view('admin.login.index');
})->name('login.index');

