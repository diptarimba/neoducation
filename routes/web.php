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
    return view('welcome');
});

Route::get('/clow', function () {
    return view('dipta');
});

//Route::get('/tampil', 'SiswaController@index');
Route::get('/tentor/laporan', 'TentorController@laporan');
Route::get('/siswa/invoice', 'SiswaController@invoice');

//Admin Configuration
Route::get('/admin/configuration/mapel', 'AdminConfiguration@showmapel');
Route::get('/admin/configuration/level', 'AdminConfiguration@showlevel');
Route::post('/admin/configuration/mapel', 'AdminConfiguration@tambahmapel');
Route::post('/admin/configuration/level', 'AdminConfiguration@tambahlevel');
Route::delete('/admin/configuration/level/{id}','AdminConfiguration@hapuslevel');
Route::delete('/admin/configuration/mapel/{id}','AdminConfiguration@hapusmapel');


//Admin Invoice
Route::get('/admin/siswa/invoice/{id}', 'ManageSiswaController@showinvoice');
Route::post('/admin/siswa/invoice/{id}', 'ManageSiswaController@printinvoice');


Route::resource('siswa', 'SiswaController');
Route::resource('tentor', 'TentorController');
Route::resource('admin', 'AdminController');
Route::resource('managetentor', 'ManageTentorController');
Route::resource('managesiswa', 'ManageSiswaController');
Route::resource('managepresensi', 'ManagePresensiController');
Route::resource('managekeuangan', 'ManageKeuanganController');

