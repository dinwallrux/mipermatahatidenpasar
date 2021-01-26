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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth', 'admin'])->prefix('siswa')->group(function(){
    Route::get('/', 'SiswaController@index')->name('siswa');
    Route::get('/lihat/{id}', 'SiswaController@show')->name('siswa.lihat');
    Route::get('/tambah', 'SiswaController@formTambah')->name('siswa.tambah');
    Route::post('/prosesTambah', 'SiswaController@prosesTambah')->name('siswa.proses.tambah');
    Route::get('/prosesHapus/{id}', 'SiswaController@prosesHapus')->name('siswa.proses.hapus');
    Route::post('/prosesEdit', 'SiswaController@prosesEdit')->name('siswa.proses.edit');
    Route::get('/edit/{id}', 'SiswaController@formEdit')->name('siswa.edit');
});

Route::middleware(['auth', 'admin'])->prefix('tenaga-pendidik')->group(function(){
    Route::get('/{jenis_tendik}', 'TenagaPendidikController@index')->name('tenagaPendidik');
    Route::get('/{jenis_tendik}/lihat/{id}', 'TenagaPendidikController@show')->name('tenagaPendidik.lihat');
    Route::get('/{jenis_tendik}/tambah', 'TenagaPendidikController@create')->name('tenagaPendidik.tambah');
    Route::post('{jenis_tendik}/proses/tambah', 'TenagaPendidikController@store')->name('tenagaPendidik.proses.tambah');
    Route::get('{jenis_tendik}/proses/hapus/{id}', 'TenagaPendidikController@destroy')->name('tenagaPendidik.proses.hapus');
    Route::get('{jenis_tendik}/edit/{id}', 'TenagaPendidikController@edit')->name('tenagaPendidik.edit');
    Route::post('{jenis_tendik}/proses/update', 'TenagaPendidikController@update')->name('tenagaPendidik.proses.update');
});

Route::middleware(['auth', 'admin'])->prefix('sarpras')->group(function(){
    Route::get('/ruang', 'SarprasRuangController@index')->name('sarpras.ruang');
    Route::get('/ruang/tambah', 'SarprasRuangController@create')->name('sarpras.ruang.tambah');
    Route::post('/ruang/proses/tambah', 'SarprasRuangController@store')->name('sarpras.ruang.proses.tambah');
    Route::get('/ruang/proses/hapus/{id}', 'SarprasRuangController@destroy')->name('sarpras.ruang.proses.hapus');
    Route::get('/ruang/edit/{id}', 'SarprasRuangController@edit')->name('sarpras.ruang.edit');
    Route::post('/ruang/proses/edit/', 'SarprasRuangController@update')->name('sarpras.ruang.proses.update');
});

Route::middleware(['auth'])->prefix('galeri')->group(function(){
    Route::get('/', 'GaleriController@index')->name('galeri');
    Route::get('/tambah', 'GaleriController@create')->middleware(['admin'])->name('galeri.tambah');
    Route::post('/proses/tambah', 'GaleriController@store')->middleware(['admin'])->name('galeri.proses.tambah');
    Route::get('/proses/hapus/{id}', 'GaleriController@destroy')->middleware(['admin'])->name('galeri.proses.hapus');
    Route::get('/proses/edit/{id}', 'GaleriController@edit')->middleware(['admin'])->name('galeri.edit');
    Route::post('/proses/update', 'GaleriController@update')->middleware(['admin'])->name('galeri.proses.update');
});

Route::middleware(['auth'])->prefix('kategori')->group(function(){
    Route::get('/', 'KategoriController@index')->name('kategori');
    Route::get('/tambah', 'KategoriController@create')->middleware(['admin'])->name('kategori.tambah');
    Route::post('/proses/tambah', 'KategoriController@store')->middleware(['admin'])->name('kategori.proses.tambah');
    Route::get('/proses/hapus/{id}', 'KategoriController@destroy')->middleware(['admin'])->name('kategori.proses.hapus');
    Route::get('/proses/edit/{id}', 'KategoriController@edit')->middleware(['admin'])->name('kategori.edit');
    Route::post('/proses/update', 'KategoriController@update')->middleware(['admin'])->name('kategori.proses.update');
});

Route::middleware(['auth'])->prefix('informasi')->group(function(){
    Route::get('/', 'InformasiController@index')->name('info');
    Route::get('/lihat/{id}', 'InformasiController@show')->name('info.lihat');
    Route::get('/tambah', 'InformasiController@create')->middleware(['admin'])->name('info.tambah');
    Route::post('/proses/tambah', 'InformasiController@store')->middleware(['admin'])->name('info.proses.tambah');
    Route::get('/proses/hapus/{id}', 'InformasiController@destroy')->middleware(['admin'])->name('info.proses.hapus');
    Route::get('/edit/{id}', 'InformasiController@edit')->middleware(['admin'])->name('info.edit');
    Route::post('/proses/update', 'InformasiController@update')->middleware(['admin'])->name('info.proses.update');
});

Route::middleware(['auth'])->prefix('profil')->group(function(){
    Route::get('/', 'ProfilSekolahController@index')->name('profil');
    Route::get('/edit/{id}', 'ProfilSekolahController@edit')->middleware(['admin'])->name('profil.edit');
    Route::post('/proses/update', 'ProfilSekolahController@update')->middleware(['admin'])->name('profil.proses.update');
});

Route::group([
    'prefix' => 'rombel',
    'middleware' => []
], function(){
    Route::get('/', 'RombelController@index')->name('rombel');
    Route::get('/lihat/{id}', 'RombelController@show')->name('rombel.lihat');
    Route::get('/tambah', 'RombelController@create')->name('rombel.tambah');
    Route::post('/proses/tambah', 'RombelController@store')->name('rombel.proses.tambah');
    Route::get('/proses/hapus/{id}', 'RombelController@destroy')->name('rombel.proses.hapus');
    Route::get('/edit/{id}', 'RombelController@edit')->name('rombel.edit');
    Route::post('/proses/update', 'RombelController@update')->name('rombel.proses.update');
    Route::get('/proses/siswa/pindah', 'RombelController@siswaPindah')->name('rombel.proses.siswa.pindah');
    Route::get('/proses/siswa/keluar', 'RombelController@siswaKeluar')->name('rombel.proses.siswa.keluar');
});

Route::group([
    'prefix' => 'user',
    'middleware' => ['auth', 'admin']
], function(){
    Route::get('/', 'UserController@index')->name('user');
    Route::get('/tambah', 'UserController@create')->name('user.tambah');
    Route::post('/proses/tambah', 'UserController@store')->name('user.proses.tambah');
    Route::get('/proses/hapus/{id}', 'UserController@destroy')->name('user.proses.hapus');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/proses/update', 'UserController@update')->name('user.proses.update');
});

Route::group([
    'prefix' => 'peran',
    'middleware' => ['auth', 'admin']
], function(){
    Route::get('/', 'PeranController@index')->name('peran');
    Route::get('/tambah', 'PeranController@create')->name('peran.tambah');
    Route::post('/proses/tambah', 'PeranController@store')->name('peran.proses.tambah');
    Route::get('/proses/hapus/{id}', 'PeranController@destroy')->name('peran.proses.hapus');
    Route::get('/edit/{id}', 'PeranController@edit')->name('peran.edit');
    Route::post('/proses/update', 'PeranController@update')->name('peran.proses.update');
});