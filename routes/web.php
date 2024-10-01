<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\EdisiController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\JenjangController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenerbitController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('admin/buku', BukuController::class,);

    Route::resource('admin/tipe', TipeController::class,);

    Route::resource('admin/jenjang', JenjangController::class,);

    Route::resource('admin/penerbit', PenerbitController::class,);

    Route::resource('admin/edisi', EdisiController::class,);

    Route::resource('admin/penulis', PenulisController::class,);

    Route::resource('admin/mapel', MapelController::class,);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
