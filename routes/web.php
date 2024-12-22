<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\ContactController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::resource('/admin/projects', AdminProjectController::class);

// CRUD Categories

Route::resource('category', CategoriesController::class);

Route::middleware(['auth'])->group(function () {
    
});

//CRUD House
Route::resource('houses', HousesController::class);

//CRUD Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit'); 