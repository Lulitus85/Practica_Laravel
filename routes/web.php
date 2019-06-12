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

    Route::get('/movies', "MovieController@index");

//C
    Route::get('/movies/create', 'MovieController@create');

//D
    Route::post('/movies/create', 'MovieController@store');

//A
   

    //B    
    Route::get('/movies/{id}', 'MovieController@show');

//E Crear MovieController

    Route::get('/actors', 'ActorController@index');

    Route::get('/actor/{id}', 'ActorController@show');

    Route::get('/actors/new', 'ActorController@create');

    Route::post('/actors/new', 'ActorController@store');

    Route::get('/search-actor', 'SearchController@searchActor');

    //Crear GenreController

    Route::get('/genres', 'GenreController@index');

    Route::get('/genres/new', 'GenreController@create');

    Route::post('/genres/new', 'GenreController@store');

    Route::get('/genres/{id}', 'GenreController@show');

   
/* 
Route::get('/', 'HomeController@index');

// Movies
Route::group(['prefix' => 'movies'], function() {
    Route::get('/', 'MovieController@index');
    Route::get('/create', 'MovieController@create');
    Route::post('/create', 'MovieController@store');
    Route::get('/{id}','MovieController@show');

});

// Actors
Route::group(['prefix' => 'actors'], function() {
    Route::get('/', 'ActorController@index');
    Route::get('/{id}', 'ActorController@show');
    Route::get('/create', 'ActorController@create');
    Route::post('/create', 'ActorController@store');
});

// Generos
Route::group(['prefix' => 'genres'], function() {
    Route::get('/', 'GenreController@index');
    Route::get('/{id}', 'GenreController@show');
    Route::get('/create', 'GenreController@create');
    Route::post('/create', 'GenreController@store');
}); */