<?php

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

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

Route::get('/reg', 'App\Http\Controllers\MainController@reg');

Route::get('/login', 'App\Http\Controllers\MainController@login');

Route::resource('posts', 'PostsController');

Route::get('/register', [\App\Http\Controllers\RegController::class, 'showRegisterForm'])->name('register');

Route::post('/register_process', [\App\Http\Controllers\RegController::class, 'register'])->name('register_process');

Route::get('/login', [\App\Http\Controllers\RegController::class, 'showLoginForm'])->name('login');

Route::post('/login_process', [\App\Http\Controllers\RegController::class, 'login'])->name('login_process');

Route::get('/logout', [\App\Http\Controllers\RegController::class, 'logout'])->name('logout');

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: '. $id.'. Name: '.$name;
//});
