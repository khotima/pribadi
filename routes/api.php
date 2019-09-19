<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/penduduk', 'PendudukC@index')->name('index');
Route::get('/pend/tambah','PendudukC@tambah');
Route::post('/pend/store','PendudukC@store');
Route::get('/pend/edit/{id}','PendudukC@edit')->name('pend.edit');
Route::post('/pend/update/{id}','PendudukC@update')->name('pend.update');
Route::get('/pend/delete/{id}','PendudukC@destroy')->name('pend.destroy');

