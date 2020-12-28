<?php

use App\Http\Controllers\ProfilSekolahController;
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

Route::middleware(['auth', 'admin'])->prefix('siswa')->group(function(){
    Route::get('/', 'SiswaController@index')->name('siswa');
    Route::get('/tambah', 'SiswaController@formTambah')->name('siswa.tambah');
    Route::post('/prosesTambah', 'SiswaController@prosesTambah')->name('siswa.proses.tambah');
    Route::get('/prosesHapus/{id}', 'SiswaController@prosesHapus')->name('siswa.proses.hapus');
    Route::post('/prosesEdit', 'SiswaController@prosesEdit')->name('siswa.proses.edit');
    Route::get('/edit/{id}', 'SiswaController@formEdit')->name('siswa.edit');
});

Route::middleware(['auth', 'admin'])->prefix('tenaga-pendidik')->group(function(){
    Route::get('/{jenis_tendik}', 'TenagaPendidikController@index')->name('tenagaPendidik');
    Route::get('/{jenis_tendik}/tambah', 'TenagaPendidikController@create')->name('tenagaPendidik.tambah');
    Route::post('{jenis_tendik}/proses/tambah', 'TenagaPendidikController@store')->name('tenagaPendidik.proses.tambah');
    Route::get('{jenis_tendik}/proses/hapus/{id_tenaga_pendidik}', 'TenagaPendidikController@destroy')->name('tenagaPendidik.proses.hapus');
    Route::get('{jenis_tendik}/edit/{id_tenaga_pendidik}', 'TenagaPendidikController@edit')->name('tenagaPendidik.edit');
    Route::post('{jenis_tendik}/proses/update', 'TenagaPendidikController@update')->name('tenagaPendidik.proses.update');
});

Route::middleware(['auth', 'admin'])->prefix('sarpras')->group(function(){
    Route::get('/ruang', 'SarprasRuangController@show')->name('sarpras.ruang');
    Route::get('/ruang/tambah', 'SarprasRuangController@create')->name('sarpras.ruang.tambah');
    Route::post('/ruang/proses/tambah', 'SarprasRuangController@store')->name('sarpras.ruang.proses.tambah');
    Route::get('/ruang/proses/hapus/{id}', 'SarprasRuangController@destroy')->name('sarpras.ruang.proses.hapus');
    Route::get('/ruang/edit/{id}', 'SarprasRuangController@edit')->name('sarpras.ruang.edit');
    Route::post('/ruang/proses/edit/', 'SarprasRuangController@update')->name('sarpras.ruang.proses.update');
});

Route::middleware(['auth'])->prefix('galeri')->group(function(){
    Route::get('/', 'GaleriController@show')->name('galeri');
    Route::get('/tambah', 'GaleriController@create')->name('galeri.tambah');
    Route::post('/proses/tambah', 'GaleriController@store')->name('galeri.proses.tambah');
    Route::get('/proses/hapus/{id}', 'GaleriController@destroy')->name('galeri.proses.hapus');
    Route::get('/proses/edit/{id}', 'GaleriController@edit')->name('galeri.edit');
    Route::post('/proses/update', 'GaleriController@update')->name('galeri.proses.update');
});

Route::middleware(['auth'])->prefix('informasi')->group(function(){
    Route::get('/', 'InformasiController@index')->name('info');
    Route::get('/lihat/{id}', 'InformasiController@show')->name('info.lihat');
    Route::get('/tambah', 'InformasiController@create')->name('info.tambah');
    Route::post('/proses/tambah', 'InformasiController@store')->name('info.proses.tambah');
    Route::get('/proses/hapus/{id}', 'InformasiController@destroy')->name('info.proses.hapus');
    Route::get('/edit/{id}', 'InformasiController@edit')->name('info.edit');
    Route::post('/proses/update', 'InformasiController@update')->name('info.proses.update');
});

Route::middleware(['auth'])->prefix('profil')->group(function(){
    Route::get('/', 'ProfilSekolahController@index')->name('profil');
    Route::get('/edit/{id}', 'ProfilSekolahController@edit')->name('profil.edit');
    Route::post('/proses/update', 'ProfilSekolahController@update')->name('profil.proses.update');
});