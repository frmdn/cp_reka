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

/*Route::get('/', function () {
    return view('web.index');
});
*/
Route::get('/coba', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/home', function () {
    return view('adm.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'UtamaController@index')->name('utama');
Route::get('/contoh', 'ContohController@index')->name('contoh');

Route::resource('siswa', 'SiswaController')->middleware('auth');
Route::resource('post','PostController')->middleware('auth');
Route::resource('user','UserController')->middleware('auth');
Route::resource('page','PageController')->middleware('auth');


// Ini yang saya tambahkan gan
Route::get('/logout', 'AuthController@logout');
Route::get('/halaman/{id}', 'UtamaController@halaman');
Route::get('/settings', 'SettingsController@index');
Route::post('/settings/submit/{id}', 'SettingsController@change');
