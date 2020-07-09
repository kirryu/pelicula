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

Route::get('/','ProyectoController@index')->name("inicio"); 


Route::get('login','UsuarioController@login')->name("login");

Route::post('login/acceso','UsuarioController@acceso' )->name('acceso');

Route::get('logout','UsuarioController@logout')->name('logout');

Route::get('catalog/show/{id}', 'CatalogoController@show');

Route::get('catalog', 'CatalogoController@index');

Route::get('catalog/create', 'CatalogoController@create');

Route::get('catalog/edit/{id}', 'CatalogoController@edit');

Route::get('tabla','TablaController@tabla');

Route::get('tabla/multiplicacion/{id}','TablaController@multiplicacion')->name('multiplicar');

Route::get('tabla/resultado/{id},{estado}','TablaController@operacion')->name('operacion');

Route::get('prueba','ProyectoController@prueba');

Route::get('tabla/resultado/operacion/{id}','TablaController@show')->name('mostrar');

