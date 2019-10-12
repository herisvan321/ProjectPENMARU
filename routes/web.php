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
    return view('home.template');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/alurpend', 'HomeController@alurpend');
Route::post('/home/alurpend', 'HomeController@svalurpend');
Route::put('/home/alurpend/{id}', 'HomeController@upalurpend');
Route::delete('/home/alurpend/{id}', 'HomeController@dlalurpend');


Route::get('/home/brosurpend', 'HomeController@brosurpend');
Route::post('/home/brosurpend', 'HomeController@svbrosurpend');
Route::put('/home/brosurpend/{id}', 'HomeController@upbrosurpend');
Route::delete('/home/brosurpend/{id}', 'HomeController@dlbrosurpend');


Route::get('/home/dterftar', 'HomeController@dterftar');
Route::post('/home/dterftar', 'HomeController@dterftar');
Route::put('/home/dterftar/{id}', 'HomeController@dterftar');
Route::delete('/home/dterftar/{id}', 'HomeController@dterftar');


Route::get('/home/fasilitas', 'HomeController@fasilitas');
Route::post('/home/fasilitas', 'HomeController@svfasilitas');
Route::put('/home/fasilitas/{id}', 'HomeController@upfasilitas');
Route::delete('/home/fasilitas/{id}', 'HomeController@dlfasilitas');


Route::get('/home/infopen', 'HomeController@infopen');
Route::post('/home/infopen', 'HomeController@svinfopen');
Route::put('/home/infopen/{id}', 'HomeController@upinfopen');
Route::delete('/home/infopen/{id}', 'HomeController@dlinfopen');


Route::get('/home/kemudahan', 'HomeController@kemudahan');
Route::post('/home/kemudahan', 'HomeController@svkemudahan');
Route::put('/home/kemudahan/{id}', 'HomeController@upkemudahan');
Route::delete('/home/kemudahan/{id}', 'HomeController@dlkemudahan');


Route::get('/home/pesanalum', 'HomeController@pesanalum');
Route::post('/home/pesanalum', 'HomeController@svpesanalum');
Route::put('/home/pesanalum/{id}', 'HomeController@uppesanalum');
Route::delete('/home/pesanalum/{id}', 'HomeController@dlpesanalum');


Route::get('/home/prestasi', 'HomeController@prestasi');
Route::post('/home/prestasi', 'HomeController@svprestasi');
Route::put('/home/prestasi/{id}', 'HomeController@upprestasi');
Route::delete('/home/prestasi/{id}', 'HomeController@dlprestasi');


Route::get('/home/prodidanpeluang', 'HomeController@prodidanpeluang');
Route::post('/home/prodidanpeluang', 'HomeController@svprodidanpeluang');
Route::put('/home/prodidanpeluang/{id}', 'HomeController@upprodidanpeluang');
Route::delete('/home/prodidanpeluang/{id}', 'HomeController@dlprodidanpeluang');


Route::get('/home/slider', 'HomeController@slider');
Route::post('/home/slider', 'HomeController@svslider');
Route::put('/home/slider/{id}', 'HomeController@upslider');
Route::delete('/home/slider/{id}', 'HomeController@dlslider');


Route::get('/home/urlinfo', 'HomeController@urlinfo');
Route::post('/home/urlinfo', 'HomeController@svurlinfo');
Route::put('/home/urlinfo/{id}', 'HomeController@upurlinfo');
Route::delete('/home/urlinfo/{id}', 'HomeController@dlurlinfo');



