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
    return view('front.index1');

});

Route::get('/duan',[App\Http\Controllers\Front\DuAnController::class, 'show']);

Route::get('/duan/duanchitiet/{id}',[App\Http\Controllers\Front\DuAnChiTietController::class, 'show']);


Route::get('/gioithieu',[App\Http\Controllers\Front\GioiThieuController::class, 'show']);
