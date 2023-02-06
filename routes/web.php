<?php

use App\Http\Controllers\LoginController;
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
Route::get('/detailmateri', function () {
    return view('User.materi.detailmateri');
});
Route::get('/video', function () {
    return view('User.video.video');
});
Route::get('/evaluasi', function () {
    return view('User.evaluasi.evaluasi');
});
Route::get('/detailevaluasi', function () {
    return view('User.evaluasi.detailevaluasi');
});
Route::get('/daftarpustaka', function () {
    return view('User.daftarpustaka.daftarpustaka');
});
Route::get('/profile', function () {
    return view('User.profile.profile');
});


// login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/dashboard', [LoginController::class, 'login_action'])->name('login.action');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// admin
Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', function () {
            return view('Admin.Dashboard.dashboard');
        });

        // route materi
        Route::get('/Admin/Materi', 'MateriController@index')->name('materi.index');


        // route video
        Route::get('/Admin/Video', 'VideoController@index')->name('video.index');


        // route evaluasi
        Route::get('/Admin/Evaluasi', 'EvaluasiController@index')->name('evaluasi.index');

        // route daftar pustaka
        Route::get('/Admin/DaftarPustaka/index', 'DaftarPustakaController@index')->name('dapus.index');
    });
});
