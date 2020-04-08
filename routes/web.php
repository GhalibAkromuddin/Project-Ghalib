<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/regis-siswa', 'SiswaController@regis_example');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('siswa', 'SiswaController@index');
    Route::get('siswa/tambah', 'SiswaController@tambah');
    Route::post('siswa/simpan', 'SiswaController@simpan');
    Route::get('siswa/edit/{id}', 'SiswaController@edit');
    Route::put('siswa/update/{id}', 'SiswaController@update');
    Route::get('siswa/hapus/{id}', 'SiswaController@hapus');
    Route::get('siswa/cari', 'SiswaController@cari');

    Route::get('kelas', 'KelasController@index');
    Route::get('kelas/tambah', 'KelasController@tambah');
    Route::post('kelas/simpan', 'KelasController@simpan');
    Route::get('kelas/edit/{id}', 'KelasController@edit');
    Route::put('kelas/update/{id}', 'KelasController@update');
    Route::get('kelas/hapus/{id}', 'KelasController@hapus');
    Route::get('kelas/cari', 'KelasController@cari');

    Route::get('jurusan', 'JurusanController@index');
    Route::get('jurusan/tambah', 'JurusanController@tambah');
    Route::post('jurusan/simpan', 'JurusanController@simpan');
    Route::get('jurusan/edit/{id}', 'JurusanController@edit');
    Route::put('jurusan/update/{id}', 'JurusanController@update');
    Route::get('jurusan/hapus/{id}', 'JurusanController@hapus');
    Route::get('jurusan/cari', 'JurusanController@cari');

    Route::get('guru', 'GuruController@index');
    Route::get('guru/tambah', 'GuruController@tambah');
    Route::post('guru/simpan', 'GuruController@simpan');
    Route::get('guru/edit/{id}', 'GuruController@edit');
    Route::put('guru/update/{id}', 'GuruController@update');
    Route::get('guru/hapus/{id}', 'GuruController@hapus');
    Route::get('guru/cari', 'GuruController@cari');

    Route::get('mapel', 'MapelController@index');
    Route::get('mapel/tambah', 'MapelController@tambah');
    Route::post('mapel/simpan', 'MapelController@simpan');
    Route::get('mapel/edit/{id}', 'MapelController@edit');
    Route::put('mapel/update/{id}', 'MapelController@update');
    Route::get('mapel/hapus/{id}', 'MapelController@hapus');

    Route::get('jadwal', 'JadwalController@index');
    Route::get('jadwal/tambah', 'JadwalController@tambah');
    Route::post('jadwal/simpan', 'JadwalController@simpan');
    Route::get('jadwal/edit/{id}', 'JadwalController@edit');
    Route::put('jadwal/update/{id}', 'JadwalController@update');
    Route::get('jadwal/hapus/{id}', 'JadwalController@hapus');
});
