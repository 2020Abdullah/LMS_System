<?php

use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\seasonsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('register/{type}', [RegisterController::class, 'show_form'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::get('login/{type}', [LoginController::class, 'show_form'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');

/*
========================
Admin Routes
========================
*/

Route::group(['middleware' => 'auth', 'as' => 'admin.'], function () {
    // Grades 
    Route::get('Grade', [GradeController::class, 'index'])->name('Grade.index');
    Route::post('Grade/store', [GradeController::class, 'store'])->name('Grade.store');
    Route::post('Grade/update', [GradeController::class, 'update'])->name('Grade.update');
    Route::delete('Grade/destory/{id}', [GradeController::class, 'delete'])->name('Grade.delete');

    // seasons
    Route::get('classes', [seasonsController::class, 'index'])->name('classes.index');
    Route::post('classes/store', [seasonsController::class, 'store'])->name('classes.store');
    Route::delete('class/{id}', [seasonsController::class, 'delete'])->name('class.delete');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
