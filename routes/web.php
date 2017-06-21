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

route::get('/inicio', 'SiteController@inicio')->name('principal');
  

route::get('/form', 'Sitecontroller@form');

route::post('/form', 'SiteController@insert');

route::group(['middleware' => 'auth'], function(){
Route::resource('atores', 'AtorController');
Route::resource('filmes', 'FilmeController');
Route::resource('generos', 'GeneroController');
route::resource('lista', 'ListaController');
route::post('lista.show', 'listaController@addfilme');
});
Auth::routes();

Route::get('/home' , 'HomeController@index');
Route::get('/' , 'HomeController@index');


