<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
Route::get('/profile', function () {
    return view('User.profile.profile');
});


// materi
Route::get('/materi', [UserController::class, 'indexmateri']);
Route::get('/materi/detailmateri/{id}', [UserController::class, 'detailmateri']);


// video
Route::get('/video', [UserController::class, 'indexvideo']);
Route::get('/video/{playlistbaru}', [UserController::class, 'detailvideo'])->name('detail.video');


// evaluasi
Route::get('/evaluasi', [UserController::class, 'indexevaluasi']);
Route::get('/evaluasi/detailevaluasi/{id}', [UserController::class, 'detailevaluasi']);


// daftar pustaka
Route::get('/daftarpustaka', [UserController::class, 'indexdapus']);


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

        Route::post('upload-image', 'MateriController@uploadImage')->name('upload');


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
        Route::get('/Admin/DaftarPustaka', 'DaftarPustakaController@index')->name('dapus.index');
        Route::post('Admin/DaftarPustaka', 'DaftarPustakaController@store');
        Route::get('/Admin/DaftarPustaka/edit/{id}', 'DaftarPustakaController@edit')->name('dapus.edit');
        Route::post('Admin/DaftarPustaka/update/{id}', 'DaftarPustakaController@update')->name('dapus.update');
        Route::delete('/Admin/DaftarPustaka/{id}', 'DaftarPustakaController@destroy')->name('dapus.destroy');

        // data login
        Route::get('/dataguru', 'GuruController@index')->name('dataguru.index');
        Route::post('/dataguru', 'GuruController@store');
        Route::get('/dataguru/edit/{id}', 'GuruController@edit')->name('dataguru.edit');
        Route::post('/dataguru/update/{id}', 'GuruController@update')->name('dataguru.update');
        Route::delete('/dataguru/{id}', 'GuruController@destroy')->name('dataguru.destroy');
    });
});
