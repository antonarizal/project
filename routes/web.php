<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KatalogController;
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

// Route::get('/insert', [SiswaController::class, 'insert']);
// Route::get('/table', [SiswaController::class, 'table']);

// Route::get('/login',[LoginController::class,'login',['title'=>'Halaman Login']]);
// Route::get('/regist',[RegistController::class,'regist',['title'=>'Halaman Regist']]);




Route::get('/katalog',[KatalogController::class,'katalog',['title'=>'Daftar buku']]);
Route::get('/detail/{id}',[DetailController::class,'detail',['title'=>'Detail buku']]);
