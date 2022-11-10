<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/mahasiswa');
});
Route::get('/mahasiswa', [\App\Http\Controllers\dataController::class, 'mahasiswa']);
Route::get('/matakuliah', [\App\Http\Controllers\dataController::class, 'matakuliah']);

