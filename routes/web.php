<?php

use App\TenagaPendidik;
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

Route::prefix('tenaga-pendidik')->group(function(){
    Route::get('/{jenis_tendik}', 'TenagaPendidikController@index')->name('tenagaPendidik');
    Route::get('/{jenis_tendik}/tambah', 'TenagaPendidikController@create')->name('tenagaPendidik.tambah');
    Route::post('{jenis_tendik}/proses/tambah', 'TenagaPendidikController@store')->name('tenagaPendidik.proses.tambah');
    Route::get('{jenis_tendik}/proses/hapus/{id_tenaga_pendidik}', 'TenagaPendidikController@destroy')->name('tenagaPendidik.proses.hapus');
    Route::get('{jenis_tendik}/edit/{id_tenaga_pendidik}', 'TenagaPendidikController@edit')->name('tenagaPendidik.edit');
    Route::post('{jenis_tendik}/proses/update', 'TenagaPendidikController@update')->name('tenagaPendidik.proses.update');
});