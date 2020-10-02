<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::view('/', 'welcome')->name('welcome');

Route::view('/login', 'authentication.login')->name('login');
Route::post('/post-login', [AuthController::class, 'login'])->name('post-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::view('/register', 'authentication.register')->name('register');
Route::view('/auth_pass_recovery', 'authentication.pass_recovery')->name('auth_pass_recovery');
Route::view('/auth_lockscreen', 'authentication.auth_lockscreen')->name('auth_lockscreen');

Route::view('/index', 'admin.index')->middleware('auth')->name('index');
Route::post('/post-register', [AuthController::class, 'register'])->name('post-register');



