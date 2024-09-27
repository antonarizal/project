<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

use App\Http\Controllers\TipeController;
use App\Http\Controllers\EdisiController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\JenjangController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PenerbitController;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/admin',function(){
    return view('admin.index');
});


Route::resource('admin/buku', BukuController::class,);

Route::resource('admin/tipe', TipeController::class,);

Route::resource('admin/jenjang', JenjangController::class,);

Route::resource('admin/penerbit', PenerbitController::class,);

Route::resource('admin/edisi', EdisiController::class,);

Route::resource('admin/penulis', PenulisController::class,);

Route::resource('admin/mapel', MapelController::class,);


Route::get('/katalog',[KatalogController::class,'katalog']);
Route::get('/detail/{id}',[DetailController::class,'detail']);
