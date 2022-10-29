<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\jadwal;
use App\Http\Controllers\OnOffcontroller;


Route::resource('/timer', jadwal::class);

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');

// Route::get('register', 'App\Http\Controllers\RegisterController')->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/admin/on', [AdminController::class, 'on'])->name('on');
        Route::get('/admin/off', [AdminController::class, 'off'])->name('off');
        //calon
        Route::get('/calons', [AdminController::class, 'calon'])->name('calon');
        Route::get('/calons/add', [AdminController::class, 'addCalon'])->name('calon.add');
        Route::post('/calons/store', [AdminController::class, 'storeCalon'])->name('calon.store');
        Route::get('/calons/{id}/edit', [AdminController::class, 'editCalon']);
        Route::put('/calons/{id}/update', [AdminController::class, 'updateCalon'])->name('calon.update');
        Route::delete('/calons/{id}', [AdminController::class, 'deleteCalon'])->name('calon.destroy');
        //users
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('register', [RegisterController::class, 'register'])->name('register');
        Route::post('register', [RegisterController::class, 'register_action'])->name('register.action');
        Route::get('/users/{id}/edit', [UserController::class, 'edit']);
        Route::put('/users/{id}/update', [UserController::class, 'update'])->name('user.update');
        Route::get('/resetPemilih/{id}/{id_calon}', AdminController::class . '@resetPemilih')->name('admin.resetPemilih');
        Route::get('/users/{id}', [UserController::class, 'destroy'])->name('user.delete');
        //total suara
        Route::get('/totalSuara', ApiVotingController::class . '@getSuara')->name('api.totalSuara');
    });
    Route::group(['middleware' => ['cek_login:siswa']], function () {
        Route::resource('/siswa', SiswaController::class);
        Route::get('/siswa/vote/{id}', VotingController::class . '@vote')->name('vote');
    });
});