<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\Prak9Controller;

use App\Http\Controllers\Prak10Controller;
use App\Http\Controllers\prak11controller;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/aboutcon', function () {
    return view('about');
});
Route::get('/kategori',[kategoriController::class,'index']);

Route::get('/prak9_01',[prak9Controller::class,'QB_tugas1']);
Route::get('/prak9_02',[prak9Controller::class,'QB_tugas2']);

Route::resource('/prak10',Prak10Controller::class);

Route::resource('/prak11',prak11controller::class);
