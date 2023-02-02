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
    return view('User.beranda.beranda');
});
Route::get('/materi', function () {
    return view('User.materi.materi');
});
Route::get('/video', function () {
    return view('User.video.video');
});
Route::get('/evaluasi', function () {
    return view('User.evaluasi.evaluasi');
});
Route::get('/daftarpustaka', function () {
    return view('User.daftarpustaka.daftarpustaka');
});
Route::get('/profile', function () {
    return view('User.profile.profile');
});
