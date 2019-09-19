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
Route::get('/register1','AuthController@getRegister')->middleware('guest')->name('regist');
Route::post('/register1','AuthController@postRegister')->middleware('guest');
Route::get('/login1','AuthController@getLogin')->middleware('guest')->name('log');
Route::post('/login1','AuthController@postLogin')->middleware('guest');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
// Route::get('/dashboard', 'AuthController@index')->middleware('auth')->name('dashboard');
Route::get('/dashboard', function () 
{
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/penduduk/cetak_pdf','PendudukC@cetak_pdf');
Route::get('/penduduk/cetak_excel','PendudukC@cetak_excel');
Route::get('/penduduk/cetak_id/{id}','PendudukC@cetak_id')->name('cetak');
Route::get('/home','HomeController@index');

Route::get('/penduduk', 'PendudukC@index')->middleware('auth')->name('pend.index');
Route::get('/pend/tambah','PendudukC@tambah')->middleware('auth');
Route::post('/pend/store','PendudukC@store')->middleware('auth');
Route::get('/pend/edit/{id}','PendudukC@edit')->middleware('auth')->name('pend.edit');
Route::post('/pend/update/{id}','PendudukC@update')->middleware('auth')->name('pend.update');
Route::get('/pend/delete/{id}','PendudukC@destroy')->middleware('auth')->name('pend.destroy');
Route::get('/penduduk/cari', 'PendudukC@cari')->middleware('auth')->name('pend.search');
Route::get('/pend/detail/{id}', 'PendudukC@detail')->middleware('auth')->name('pend.detail');
Route::get('/pend/grafik','PendudukC@grafik')->name('pend.grafik');

Route::get('/penduduk/show/{id}', 'PendudukC@show')->middleware('auth')->name('pend.show');

Route::get('/kelahiran', 'KelahiranC@index')->middleware('auth')->name('klh.index');
Route::get('/klh/tambah','KelahiranC@tambah')->middleware('auth');
Route::post('/klh/store','KelahiranC@store')->middleware('auth');
Route::get('/klh/edit/{id}','KelahiranC@edit')->middleware('auth')->name('klh.edit');
Route::post('/klh/update/{id}','KelahiranC@update')->middleware('auth')->name('klh.update');
Route::get('/klh/delete/{id}','KelahiranC@destroy')->middleware('auth')->name('klh.destroy');

Route::get('/kematian','KematianC@index')->middleware('auth')->name('kmt.index');
Route::get('/kmt/tambah','KematianC@tambah')->middleware('auth')->name('kmt.tambah');
Route::post('/kmt/store','KematianC@store')->middleware('auth')->name('kmt.store');
Route::get('/kmt/edit/{id}','KematianC@edit')->middleware('auth')->name('kmt.edit');
Route::post('/kmt/update/{id}','KematianC@update')->middleware('auth')->name('kmt.update');
Route::get('/kmt/delete/{id}','KematianC@destroy')->middleware('auth')->name('kmt.destroy');

Route::get('/pendatang','PendatangC@index')->middleware('auth')->name('pnd.index');
Route::get('/pnd/tambah','PendatangC@tambah')->middleware('auth')->name('pnd.tambah');
Route::post('/pnd/store','PendatangC@store')->middleware('auth')->name('pnd.store');
Route::get('/pnd/edit/{id}','PendatangC@edit')->middleware('auth')->name('pnd.edit');
Route::post('/pnd/update/{id}','PendatangC@update')->middleware('auth')->name('pnd.update');
Route::get('/pnd/delete/{id}','PendatangC@destroy')->middleware('auth')->name('pnd.destroy');

Route::get('/pindahan','PindahC@index')->middleware('auth')->name('pin.index');
Route::get('/pin/tambah','PindahC@tambah')->name('pin.tambah');
Route::post('/pin/store','PindahC@store')->name('pin.store');
Route::get('/pin/edit/{id}','PindahC@edit')->name('pin.edit');
Route::post('/pin/update/{id}','PindahC@update')->name('pin.update');
Route::get('/pin/delete/{id}','PindahC@destroy')->name('pin.destroy');

Route::get('/kk','KkC@index')->name('kk.index');
Route::get('/kk/tambah','KkC@tambah')->name('kk.tambah');
Route::post('/kk/store','KkC@store')->name('kk.store');
Route::get('/kk/edit/{id}','KkC@edit')->name('kk.edit');
Route::post('/kk/update/{id}','KkC@update')->name('kk.update');
Route::get('/kk/delete/{id}','KkC@destroy')->name('kk.destroy');
Route::get('/kk/detail/{id}','KkC@detail')->name('kk.detail');


Route::get('/anak','AnakC@index')->middleware('auth')->name('ank.index');
Route::get('/ank/tambah','AnakC@tambah')->middleware('auth')->name('ank.tambah');
Route::post('/ank/store','AnakC@store')->middleware('auth')->name('ank.store');
Route::get('/ank/edit/{id}','AnakC@edit')->name('ank.edit');
Route::post('/ank/update/{id}','AnakC@update')->name('ank.update');
Route::get('/ank/delete/{id}','AnakC@destroy')->name('ank.destroy');

Route::get('chartjs', 'dashboardC@chartjs')->name('chart');

// Route::get('/2', 'KelahiranController@index');
// Route::post('/2/store','KelahiranController@tambah');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
