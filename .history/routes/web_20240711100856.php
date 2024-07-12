<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
});
