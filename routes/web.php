<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\UserController;



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

Route::get('/photos/create', [PhotoController::class, 'create'])->name('photos.create');
Route::post('/photos', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
Route::get('/user', [PracticeController::class, 'user'])->name('auth.form');
Route::get('/api', [UserController::class, 'fetch'])->name('api');



// Handle form submission
Route::post('/user', [PracticeController::class, 'validationUser'])->name('auth.user');
