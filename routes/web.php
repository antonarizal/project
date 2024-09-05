<?php
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/album', function () {
    $user = User::all();

});

Route::get('/', function () {
    return view('katalog');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/detail', function () {
    return view('detail');
});




Route::get('/insert', [SiswaController::class, 'insert']);
Route::get('/table', [SiswaController::class, 'table']);
