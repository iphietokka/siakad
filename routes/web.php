<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin-home');

    //Users Controller
    Route::get('user', 'Admin\UserController@index')->name('user');
    Route::post('user/store', 'Admin\UserController@store')->name('user.store');
    Route::post('user/update/{id}', 'Admin\UserController@update')->name('user.update');
    Route::delete('user/{id}', 'Admin\UserController@destroy')->name('user.delete');

    Route::get('kurikulum', 'Admin\KurikulumController@index')->name('kurikulum');
    Route::post('kurikulum/store', 'Admin\KurikulumController@store')->name('kurikulum.store');
    Route::post('kurikulum/update/{id}', 'Admin\KurikulumController@update')->name('kurikulum.update');
    Route::delete('kurikulum/{id}', 'Admin\KurikulumController@destroy')->name('kurikulum.delete');

    Route::get('akademik', 'Admin\TahunAkademikController@index')->name('akademik');
    Route::post('akademik/store', 'Admin\TahunAkademikController@store')->name('akademik.store');
    Route::post('akademik/update/{id}', 'Admin\TahunAkademikController@update')->name('akademik.update');
    Route::delete('akademik/{id}', 'Admin\TahunAkademikController@destroy')->name('akademik.delete');

    Route::get('kelas', 'Admin\KelasController@index')->name('kelas');
    Route::post('kelas/store', 'Admin\KelasController@store')->name('kelas.store');
    Route::post('kelas/update/{id}', 'Admin\KelasController@update')->name('kelas.update');
    Route::delete('kelas/{id}', 'Admin\KelasController@destroy')->name('kelas.delete');

    Route::get('sekolah', 'Admin\SekolahController@index')->name('sekolah');
    Route::post('sekolah/update/{id}', 'Admin\SekolahController@update')->name('sekolah.update');

    Route::get('siswa', 'Admin\SiswaController@index')->name('siswa');
    Route::get('siswa/create', 'Admin\SiswaController@create')->name('siswa.create');
    Route::post('siswa/store', 'Admin\SiswaController@store')->name('siswa.store');
    Route::get('siswa/show/{id}', 'Admin\SiswaController@show')->name('siswa.detail');
    Route::get('siswa/edit/{id}', 'Admin\SiswaController@edit')->name('siswa.edit');
    Route::post('siswa/update', 'Admin\SiswaController@update')->name('siswa.update');
    Route::delete('siswa/{id}', 'Admin\SiswaController@destroy')->name('siswa.delete');

    Route::get('guru', 'Admin\GuruController@index')->name('guru');
    Route::get('guru/create', 'Admin\GuruController@create')->name('guru.create');
    Route::post('guru/store', 'Admin\GuruController@store')->name('guru.store');
    Route::get('guru/show/{id}', 'Admin\GuruController@show')->name('guru.show');
    Route::get('guru/edit/{id}', 'Admin\GuruController@edit')->name('guru.edit');
    Route::post('guru/update', 'Admin\GuruController@update')->name('guru.update');
    Route::delete('guru/{id}', 'Admin\GuruController@destroy')->name('guru.delete');

    Route::get('kelompok-pelajaran', 'Admin\KelompokPelajaranController@index')->name('kelompok-pelajaran');
    Route::post('kelompok-pelajaran/store', 'Admin\KelompokPelajaranController@store')->name('kelompok-pelajaran.store');
    Route::post('kelompok-pelajaran/update/{id}', 'Admin\KelompokPelajaranController@update')->name('kelompok-pelajaran.update');
    Route::delete('kelompok-pelajaran/{id}', 'Admin\KelompokPelajaranController@destroy')->name('kelompok-pelajaran.delete');

    Route::get('mata-pelajaran', 'Admin\MataPelajaranController@index')->name('mata-pelajaran');
    Route::post('mata-pelajaran/store', 'Admin\MataPelajaranController@store')->name('mata-pelajaran.store');
    Route::post('mata-pelajaran/update/{id}', 'Admin\MataPelajaranController@update')->name('mata-pelajaran.update');
    Route::delete('mata-pelajaran/{id}', 'Admin\MataPelajaranController@destroy')->name('mata-pelajaran.delete');
});

Route::group(['middleware' => ['auth', 'guru'], 'prefix' => 'guru'], function () {
    Route::get('/', 'Teacher\HomeController@index')->name('guru-home');
});

Route::group(['middleware' => ['auth', 'siswa'], 'prefix' => 'siswa'], function () {
    Route::get('/', 'Student\HomeController@index')->name('siswa-home');
});
