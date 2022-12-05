<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

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

//Home route
Route::get('/', [HomeController::class, 'index'])->name('home');
//Reservation Route
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservation.index');
//Admin routes
Route::prefix('admin')->middleware('admin', 'auth')->group(function () {
    Route::get('/',[AdminController::class, 'index'])->name('admin.dash');
    Route::resource('categories', CategoryController::class);
    Route::resource('foods', FoodController::class);
    Route::resource('chefs', ChefController::class);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
