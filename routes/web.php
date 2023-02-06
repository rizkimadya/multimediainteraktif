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
        Route::get('/Admin/Materi/create', 'MateriController@create')->name('materi.create');
        Route::post('/Admin/Materi', 'MateriController@store')->name('materi.store');
        Route::get('/Admin/Materi/edit/{id}', 'MateriController@edit')->name('materi.edit');
        Route::get('/Admin/Materi/show/{id}', 'MateriController@show')->name('materi.show');
        Route::post('/Admin/Materi/update/{id}', 'MateriController@update')->name('materi.update');
        Route::delete('/Admin/Materi/{id}', 'MateriController@destroy')->name('materi.destroy');


        // route video
        Route::get('/Admin/Video', 'VideoController@index')->name('video.index');
        Route::post('/Admin/Video', 'VideoController@store');
        Route::get('/Admin/Video/edit/{id}', 'VideoController@edit')->name('video.edit');
        Route::post('Admin/Video/update/{id}', 'VideoController@update')->name('video.update');
        Route::delete('/Admin/Video/{id}', 'VideoController@destroy')->name('video.destroy');


        // route evaluasi
        Route::get('/Admin/Evaluasi', 'EvaluasiController@index')->name('evaluasi.index');
        Route::post('/Admin/Evaluasi', 'EvaluasiController@store');
        Route::get('/Admin/Evaluasi/edit/{id}', 'EvaluasiController@edit')->name('materi.edit');
        Route::post('Admin/Evaluasi/update/{id}', 'EvaluasiController@update')->name('evaluasi.update');
        Route::delete('/Admin/Evaluasi/{id}', 'EvaluasiController@destroy')->name('evaluasi.destroy');

        // route daftar pustaka
        Route::get('/Admin/DaftarPustaka/index', 'DaftarPustakaController@index')->name('dapus.index');
    });
});
