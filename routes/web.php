<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('upload','upload');
Route::post('upload',[UploadController::class, 'index']);

Route::get('/cars', [CarController::class, 'index'])->name('car.index');
Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
Route::post('/car/store', [CarController::class, 'store'])->name('car.store');



Route::get('/blog',[PostController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
