<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/user', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/user/register', [RegisterController::class, 'register'])->name('user.register');

Route::group(['middleware'=>['auth']], function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/memo', [MemoController::class, 'index'])->name('memo.index');
    Route::get('/memo/create', [MemoController::class, 'create'])->name('memo.create');
    Route::get('/memo/select', [MemoController::class, 'select'])->name('memo.select');
    Route::post('/memo/update', [MemoController::class, 'update'])->name('memo.update');
    Route::post('/memo/delete', [MemoController::class, 'delete'])->name('memo.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');