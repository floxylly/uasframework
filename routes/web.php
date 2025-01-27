
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\AdopsiController;
use App\Http\Controllers\Admin\DashboardController;


// Route untuk admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('hewan', HewanController::class);
    Route::resource('adopsi', AdopsiController::class);
});

// Route untuk pengadopsi
Route::get('/', [HewanController::class, 'index'])->name('home');
Route::get('/hewan/{hewan}', [HewanController::class, 'show'])->name('hewan.show');
Route::get('/adopsi/create/{hewan_id}', [AdopsiController::class, 'create'])->name('adopsi.create');
Route::post('/adopsi', [AdopsiController::class, 'store'])->name('adopsi.store');

// Route untuk autentikasi
Auth::routes();