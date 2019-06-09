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
    Route::get('/movies', 'MovieController@index');
//C
    Route::get('/movies/create', 'MovieController@create');

//D
    Route::post('/movies/create', 'MovieController@store');

//A
    Route::get('/actors', 'ActorsController@index');


    //B    
    Route::get('/movies/{id}', 'MovieController@show');

//E Crear MovieController

    

    Route::get('/actor/{id}', 'ActorsController@show');

    Route::get('/actors/new', 'ActorsController@create');

    Route::post('/actors/new', 'ActorsController@store');

    Route::get('/search-actor', 'SearchController@searchActor');

    //Crear ActorController

    Route::get('/genres', 'GenresController@index');

    Route::get('/genres/{id}', 'GenresController@show');

    Route::get('/genres/new', 'GenresController@create');

    Route::post('/genres/new', 'GenresController@store');