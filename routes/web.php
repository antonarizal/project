<?php
use App\Models\User;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});


// harus login (auth)
Route::resource('/buku',BukuController::class);

