<?php

use App\Http\Controllers\navbarController;
use App\Http\Controllers\testController;
use App\Http\Controllers\userController;
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

Route::get('/newinfo', function() {
    return('<h2>Selamat Datang</h2>');
});

Route::get('/informasi', [userController::class, 'info2025']
);

// Route::get('/makanan', [userController::class, 'madang']);
// Route::get('/makanan', [userController::class, 'create']);

Route::get('/makanan', [userController::class, 'index'])->name('makanan.index');
Route::get('/makanan/create', [userController::class, 'create'])->name('makanan.create');
Route::post('/makanan', [userController::class, 'store'])->name('makanan.store');
Route::delete('/makanan/{id}', [userController::class, 'destroy'])->name('makanan.destroy');

Route::get('/biodata', [testController::class, 'index'])->name('data.index');
Route::get('/biodata/create', [testController::class, 'create'])->name('data.create');
Route::post('/biodata', [testController::class, 'store'])->name('data.store');
Route::delete('/biodata/{id}', [testController::class, 'destroy'])->name('data.destroy');

Route::get('/home', [navbarController::class, 'index']);

// deed jawa