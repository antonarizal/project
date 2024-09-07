<?php
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/album', function () {
    // $user = User::all();
    return view('album');
});

Route::get('/katalog', function () {
    return view('katalog',['title'=>'Daftar buku']);
});

Route::get('/detail', function () {
    return view('detail',['title'=>'Detail buku']);
});


Route::get('/insert', [SiswaController::class, 'insert']);
Route::get('/table', [SiswaController::class, 'table']);
