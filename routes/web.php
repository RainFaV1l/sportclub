<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicationController;

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

Route::controller(IndexController::class)->name('index.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/subscribe', 'subscribe')->name('subscribe');
});

Route::controller(UserController::class)->prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::post('/update', 'update')->name('update');
    Route::post('/updatePassword', 'updatePassword')->name('updatePassword');
    Route::get('/applications', 'applications')->name('applications');
});

Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

Route::controller(ApplicationController::class)->prefix('applications')->name('applications.')->group(function () {
    Route::post('/', 'create')->name('create');
});

Route::controller(AuthController::class)->group(function () {
   Route::get('/register', 'registerPage')->name('registerPage');
   Route::post('/register', 'register')->name('register');
   Route::get('/login', 'loginPage')->name('loginPage');
   Route::post('/login', 'login')->name('login');
   Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});
