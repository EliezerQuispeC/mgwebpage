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

Auth::routes();

Route::get('/', 'PageController@index');

Route::get('nosotros', 'PageController@nosotros');

Route::get('servicios/{cat_id}', 'PageController@servicios');

Route::get('productos/{cat_id}/{pro_id?}', 'PageController@productos');

Route::get('noticias', 'PageController@noticias');

Route::get('contacto', 'PageController@contacto');

Route::get('home', 'HomeController@index')->name('home');

Route::resource('admin/servicios/categoria','ServicioCategoriaController');

Route::resource('admin/servicios','ServicioController');

Route::resource('admin/productos/categoria','ProductoCategoriaController');

Route::resource('admin/productos','ProductoController');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/{slug?}', 'HomeController@index');
