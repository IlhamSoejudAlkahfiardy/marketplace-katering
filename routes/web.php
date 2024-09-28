<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\OrderController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/katering', [MerchController::class, 'merch'])->name('listMerch');

Route::get('/detail-katering', [MerchController::class, 'detailMerch'])->name('detailMerch');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

Route::get('/menu/{id}', [MenuController::class, 'detailMenu'])->name('detailMenu');

Route::get('/order', [OrderController::class, 'index'])->name('order');

Route::get('/history', [OrderController::class, 'history'])->name('history');

Route::get('/profile', [UserController::class, 'index'])->name('profile');
Route::put('/profile', [UserController::class, 'updateProfile'])->name('updateProfile');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'inputLogin'])->name('inputLogin');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'inputRegister'])->name('inputRegister');

Route::get('/kelola-menu', [MenuController::class, 'index'])->name('manageMenu');

Route::get('/tambah-menu', [MenuController::class, 'add'])->name('addMenu');
Route::post('menu/store', [MenuController::class, 'store'])->name('inputMenu');

Route::get('/update-menu', [MenuController::class, 'update'])->name('updateMenu');

// Route::get('/katering/{id}', function () {
//     return view('merch.merch');
// })->name('listMerch');
