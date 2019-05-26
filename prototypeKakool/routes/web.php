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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/masuk', 'HomeController@getMasukPage')->name('masuk');
Route::get('/daftar', 'HomeController@getDaftarPage')->name('daftar');
Route::get('/tentang', 'HomeController@getTentangPage')->name('tentang');
Route::get('/paket', 'HomeController@getPaketPage')->name('paket');
Route::get('/kelas', 'HomeController@getKelasPage')->name('kelas');
Route::get('/mentor', 'HomeController@getMentorPage')->name('mentor');
Route::get('/siswa', 'HomeController@getSiswaPage')->name('siswa');

Route::get('/bayar', 'HomeController@getBayarPage')->name('bayar');
Route::get('/user/{type}', 'HomeController@userShow')->name('user');
