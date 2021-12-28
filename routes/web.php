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



//Route::get('/tampil', 'SiswaController@index');
//Route::get('/tentor/laporan', 'TentorController@laporan');

Route::middleware('auth:admin')->group(function(){
	//Admin Configuration
	Route::get('/admin/lapkeu', 'AdminController@showLapKeu');
	Route::get('/admin/lapkeu/detail', 'AdminController@lapkeuDetail');
	//Route::post('admin/management', 'AdminController@store');
	Route::get('/admin/configuration/mapel', 'AdminConfiguration@showmapel');
	Route::get('/admin/configuration/level', 'AdminConfiguration@showlevel');
	Route::get('/admin/configuration/package', 'AdminConfiguration@showpackage');
	Route::post('/admin/configuration/mapel', 'AdminConfiguration@tambahmapel');
	Route::post('/admin/configuration/level', 'AdminConfiguration@tambahlevel');
	Route::post('/admin/configuration/package', 'AdminConfiguration@tambahpackage');
	Route::delete('/admin/configuration/level/{id}','AdminConfiguration@hapuslevel');
	Route::delete('/admin/configuration/mapel/{id}','AdminConfiguration@hapusmapel');
	Route::delete('/admin/configuration/package/{id}','AdminConfiguration@hapuspackage');
	Route::post('/admin/configuration/package/{id}','AdminConfiguration@updateharga');
	Route::get('/admin/configuration/kuisioner', 'AdminConfiguration@showkuisioner');
	Route::post('/admin/configuration/kuisioner', 'AdminConfiguration@updatekuisioner');
	Route::get('/admin/presensi', 'AdminController@presensi')->name('admin.presensi');
	Route::delete('/admin/presensi', 'AdminController@deletePresensi');

	Route::get('/admin/siswa/invoice/{id}', 'ManageSiswaController@showinvoice');
	Route::post('/admin/siswa/invoice/{id}', 'ManageSiswaController@printinvoice');

	Route::get('/managetentor/{id}/result', 'ManageTentorController@tentorquiz');

	Route::resource('admin', 'AdminController');
	Route::put('managetentor/{id}/respass', 'ManageTentorController@resetpass');
	Route::put('managesiswa/{id}/respass', 'ManageSiswaController@resetpass');
	Route::resource('managetentor', 'ManageTentorController');
	Route::resource('managesiswa', 'ManageSiswaController');
	Route::resource('managepresensi', 'ManagePresensiController');
	Route::resource('managekeuangan', 'ManageKeuanganController');

});
//Tentor Controller
Route::middleware('auth:tentor')->group(function(){
	Route::get('/tentor/laporan', 'TentorController@laporan');
	Route::resource('tentor', 'TentorController');
});

//Siswa Controller
Route::middleware('auth:siswa')->group(function(){
	Route::post('/siswa/quiz', 'SiswaController@quizupdate');
	Route::get('/siswa/quiz', 'SiswaController@quiz');
	Route::get('/siswa/quizresult', 'SiswaController@quizresult');
	Route::get('/siswa/invoice', 'SiswaController@invoice');

	Route::resource('siswa', 'SiswaController');
});


Route::get('/', function () {
	if(Auth::guard('tentor')->check()){
		return redirect('/tentor');
	} else if(Auth::guard('siswa')->check()){
		return redirect('/siswa');
	} else if(Auth::guard('admin')->check()){
		return redirect('/admin');
	}
    return view('index');
});

Route::get('/logout', 'LoginController@postLogout');

Route::get('/login/tentor', 'LoginController@tentorForm')->name('login.tentor');
Route::get('/login/siswa', 'LoginController@siswaForm')->name('login.siswa');
Route::post('/login/tentor', 'LoginController@loginTentor');
Route::post('/login/siswa', 'LoginController@loginSiswa');

Route::get('/administrator','LoginController@adminForm')->name('login.admin');
Route::post('/administrator','LoginController@loginAdmin');


