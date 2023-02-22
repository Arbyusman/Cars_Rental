<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [CarsController::class, 'index']);
Route::get('/search', [CarsController::class, 'search']);


Route::get('/admin', [CarsController::class, 'admin'])->Middleware('admin');

//Add cars
Route::get('/admin/create', [CarsController::class, 'createCarsView'])->middleware('admin');
Route::post('/admin/create', [CarsController::class, 'createCars'])->middleware('admin');
//update cars
Route::get('/admin/update/{id}', [CarsController::class, 'updateCarsView'])->middleware('admin');
Route::post('/admin/update/{id}', [CarsController::class, 'updateCars'])->middleware('admin')->name('updateCars');

Route::post('/admin/delete/{id}', [CarsController::class, 'destroy'])->middleware('admin');

Route::get('/test', [CarsController::class, 'notif']);
