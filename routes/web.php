<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HousesController;


Route::get('/', [DashboardController::class, 'index']);
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::resource('/admin/projects', AdminProjectController::class);

// CRUD Categories
Route::get('/category/create', [CategoriesController::class, 'create']);
Route::post('/category', [CategoriesController::class, 'store']);
Route::get('/category', [CategoriesController::class, 'index']);
Route::get('/category/{id}', [CategoriesController::class, 'show']);
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/category/{id}', [CategoriesController::class, 'update']);
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);


//CRUD House
Route::resource('houses', HousesController::class);