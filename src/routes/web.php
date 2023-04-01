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

// Lab_tech本画面
Route::get('/', function () {
    return view('welcome');
});

// ユーザー画面(現在はユーザー機能は実装していない)
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 管理者画面
Route::prefix('/admin')->group(function () {
    Route::view('/login', 'admin/login')->middleware('guest:admin');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Admin\LoginController::class,'logout']);
    Route::view('/register', 'admin/register');
    Route::post('/register', [App\Http\Controllers\Admin\RegisterController::class, 'register']);
    Route::view('/home', 'admin/home')->middleware('auth:admin');
});