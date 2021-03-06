<?php

use Illuminate\Support\Facades\Route;

/* index */
Route::get('/home', 'IndexController@index')->name('home');
Route::get('/', 'IndexController@index');

/* rotas para login e logout */
Route::get('login', 'Auth\LoginController@redirectToProvider');
Route::get('callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/logout', 'Auth\LoginController@logout');
Route::get('/logout', 'Auth\LoginController@logout');

/* resource listas model */
Route::resource('/listas', 'ListaController');

/* TODO: Mudar para POST */
Route::get('/updateMailman/{lista}', 'ListaController@updateMailman');
Route::get('/emails/{lista}', 'UserController@emails');

/* User */
Route::resource('/users', 'UserController');
