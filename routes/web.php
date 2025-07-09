<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/create', [UserController::class, 'showCreate'])->name('user.create');
Route::post('/create', [UserController::class, 'store'])->name('user.store');

Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/edit/{id}', [UserController::class, 'update'])->name('user.update');

Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
