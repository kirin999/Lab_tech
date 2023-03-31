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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showLoginForm'])->name('admin.login');
// Route::get('/admin/register', [App\Http\Controllers\Admin\AdminController::class, 'showRegisterForm'])->name('admin.register');
// Route::post('/admin/register/create', [App\Http\Controllers\Admin\AdminRegisterController::class, 'create'])->name('admin.register.create');
// Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login.submit');
// Route::post('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');



// 管理者ログイン
// Route::get('/admin/login', 'App\Http\Controllers\Admin\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/admin/login', 'App\Http\Controllers\Admin\AdminLoginController@login')->name('admin.login.submit');;
// Route::post('/admin/logout', 'App\Http\Controllers\Admin\AdminLoginController@logout')->name('admin.logout');

// Route::get('/admin/register', 'App\Http\Controllers\Admin\AdminRegisterController@showRegistrationForm')->name('admin.register');
// Route::post('/admin/register', 'App\Http\Controllers\Admin\AdminRegisterController@register')->name('admin.register.create');

// Route::get('/admin/password/reset', 'App\Http\Controllers\Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
// Route::post('/admin/password/email', 'App\Http\Controllers\Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
// Route::get('/admin/password/reset/{token}', 'App\Http\Controllers\Admin\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
// Route::post('/admin/password/reset', 'App\Http\Controllers\Admin\AdminResetPasswordController@reset')->name('admin.password.update');


// 管理者ログイン
// Route::get('/admin/login', 'App\Http\Controllers\Admin\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/admin/login', 'App\Http\Controllers\Admin\AdminLoginController@login')->name('admin.login.submit');;
// Route::post('/admin/logout', 'App\Http\Controllers\Admin\AdminLoginController@logout')->name('admin.logout');

// // 管理者新規登録
// Route::get('/admin/register', 'App\Http\Controllers\Auth\RegisterController@showAdminRegistrationForm')->name('admin.register');
// Route::post('/admin/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('admin.register.create');

// // パスワード変更
// Route::get('/admin/password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
// Route::post('/admin/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('/admin/password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('/admin/password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

// Route::get('/admin/home', 'App\Http\Controllers\HomeController@adminIndex')->name('admin.home');


// ここから追加
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');

