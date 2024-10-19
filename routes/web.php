<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminProjectController;


Route::get('/', [DashboardController::class, 'index']);
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::resource('/admin/projects', AdminProjectController::class);