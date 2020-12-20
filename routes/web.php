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
    return view('auth.login');
});

Auth::routes();

Route::get('/beranda', 'HomeController@index')->name('beranda');

Route::prefix('siswa')->group(function(){
    Route::get('/', 'SiswaController@index')->name('siswa');
    Route::get('/tambah', 'SiswaController@formTambah')->name('siswa.tambah');
    Route::post('/prosesTambah', 'SiswaController@prosesTambah')->name('siswa.proses.tambah');
    Route::get('/prosesHapus/{id}', 'SiswaController@prosesHapus')->name('siswa.proses.hapus');
    Route::post('/prosesEdit', 'SiswaController@prosesEdit')->name('siswa.proses.edit');
    Route::get('/edit/{id}', 'SiswaController@formEdit')->name('siswa.edit');
});

Route::prefix('guru')->group(function(){
    Route::get('/', 'GuruController@index')->name('guru');
    Route::get('/tambah', 'GuruController@create')->name('guru.tambah');
    Route::post('/proses/tambah', 'GuruController@store')->name('guru.proses.tambah');
    Route::get('/proses/delete/{id_guru}', 'GuruController@destroy')->name('guru.proses.delete');
    Route::post('/proses/edit', 'GuruController@update')->name('guru.proses.edit');
    Route::get('/edit/{id_guru}', 'GuruController@edit')->name('guru.edit');
});

Route::prefix('tenaga-pendidik')->group(function(){

});