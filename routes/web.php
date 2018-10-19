<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/saludo', function () {
    return ('hello asshole');
});


Route::get('/home/{name}/{lastname?}', function ($name, $lastname = null) {
    return ('hello asshole ' . $name . ' ' . $lastname);
});

Route::get('/home/{name}/{lastname?}', 'SaludosController@saludoPersonal');

Route::get('movies', 'MoviesController@index');
Route::get('movies/details/{id}', 'MoviesController@details');
Route::get('movies/create/{id}', 'MoviesController@createForm');
Route::post('movies/create', 'MoviesController@create');
Route::get('movies/update/{id}', 'MoviesController@updateForm');
Route::put('movies/update/{id}', 'MoviesController@update');
Route::delete('movies/delete/{id}', 'MoviesController@delete');


Route::get('/peliculas', function () {
    return view('peliculas');
});

Route::get('/peliculas/{id}', 'PeliculasController@searchMovieById');
Route::post('/peliculas/{id}', 'PeliculasController@searchMovieById');

