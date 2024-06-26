<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProfileController::class, 'redirect'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('reg',RegisteredUserController::class);

Route::resource('buses',BusController::class);
Route::resource('routes',RouteController::class);
Route::resource('customers',CustomerController::class);
Route::resource('admin',AdminController::class);
Route::resource('booking',BookingController::class);


Route::get('/customer/contact', [CustomerController::class, 'getContact']);

Route::get('/routes/destinations', [RouteController::class, 'getDestinations']);
Route::get('/routes/details', [RouteController::class, 'getRouteDetails']);


Route::get('customer/{customerName}','CustomerController@getCustomerDetails');





