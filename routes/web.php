<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\userController;




Route::get('/', [PostController::class, 'home']);
Route::get('/dashboard', [DashController::class, 'dashboard']);
Route::get('/buses', [BusController::class, 'buses']);
Route::get('/routes', [RouteController::class, 'routes']);
Route::get('/customers', [CustomController::class, 'customers']);
Route::get('/bookings', [BookController::class, 'books']);
Route::get('/seats', [SeatController::class,'seat']);
Route::get('/admin', [AdminController::class, 'admin']);

Route::post('/add_user', [userController::class, 'addUser']);
Route::post('/buses', [BusController::class, 'saveBuses']);
Route::post('/routes', [RouteController::class, 'route']);
Route::post('/customers', [CustomController::class, 'customer']);
Route::post('/bookings', [BookController::class,'booking']);







