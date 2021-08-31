<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\PlaceController;
use App\Http\Middleware\admin;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [SiteController::class, 'allSites']);
Route::get('/signup', [UserController::class, 'signUp']);
Route::post('/signup', [UserController::class, 'signUp']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/users/{id}', [UserController::class, 'userInfo']);
Route::get('/sites', [SiteController::class, 'allSites']);
Route::get('/sites/{id}', [SiteController::class, 'siteInfo']);
Route::get('/reservations/{id}', [ReservationController::class, 'reservationInfo']);
Route::get('/userReservations/{id}', [ReservationController::class, 'userReservations']);

Route::post('/createSite', [SiteController::class, 'createSite']);
Route::get('/createSite', [SiteController::class, 'createSite']);

Route::middleware(['cors'])->group(function () {
    Route::get('fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
});

Route::middleware(['admin'])->group(function () {
    Route::get('admin/', [FirstController::class, 'dashboard']);

    Route::get('admin/users', [UserController::class, 'allUsers']);
    Route::get('admin/users/{id}/delete', [UserController::class, 'deleteUser']);

    Route::get('admin/places', [PlaceController::class, 'allPlaces']);
    Route::get('admin/places/create', [PlaceController::class, 'createPlace']);
    Route::get('admin/places/{id}/delete', [PlaceController::class, 'deletePlace']);

    Route::get('admin/reservations', [ReservationController::class, 'allReservations']);
});
