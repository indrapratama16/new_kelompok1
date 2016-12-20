<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/datadosen', 'DataDosenController');
Route::resource('admin/prodi', 'ProdiController');
Route::resource('admin/datamahasiswa', 'DataMahasiswaController');
Route::resource('admin/datastaf', 'DataStafController');
Route::resource('admin/fasilitasprodi', 'FasilitasProdiController');
Route::resource('admin/matakuliah', 'MatakuliahController');
Route::resource('admin/jadwalmatakuliah', 'JadwalMatakuliahController');
Route::resource('admin/dosenwali', 'DosenWaliController');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
