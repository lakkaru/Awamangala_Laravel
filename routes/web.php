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
Route::redirect('/','/en'); //routing to default language

Route::group(['prefix'=>'{language}'], function (){//for language selection
    Route::get('/', function () {return view('welcome');});//for welcome page
    Route::get('/user/dashboard', function () {return view('user_dashboard');});//for user dashboard

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['prefix'=>'admin'], function (){
        Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'Admin_login'])->name('admin.login.submit');
        Route::get('/dashboard', [App\Http\Controllers\Auth\AdminLoginController::class, 'dashboard'])->name('admin.dashboard');
    });
});
