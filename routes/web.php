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
//A
    Route::get('/movies', 'MovieController@index');
//B    
    Route::get('/movies/{id}', 'MovieController@show');
//C
    Route::get('/movies/new', 'MovieController@create');

//D
    Route::post('/movies/new', 'MovieController@store');

//E Crear MovieController

    Route::get('/actors', 'ActorsController@index');

    Route::get('/actor/{id}', 'ActorsController@show');

    Route::get('/actors/new', 'ActorsController@create');

    Route::post('/actors/new', 'ActorsController@store');

    Route::get('/actors/search', 'ActorController@search');

    //Crear ActorController

    Route::get('/genres', 'GenresController@index');

    Route::get('/genres/{id}', 'GenresController@show');

    Route::get('/genres/new', 'GenresController@create');

    Route::post('/genres/new', 'GenresController@store');