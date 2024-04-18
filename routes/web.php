<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('buses',BusController::class);
Route::resource('routes',RouteController::class);
Route::resource('customers',CustomerController::class);

Route::get('/bookings', function () {
    return view('layout.bookings');
});


Route::get('/seats', function () {
    return view('layout.seats');
});


Route::get('/admin', function () {
    return view('layout.new_admin');
});

