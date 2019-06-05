<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
    protected $genres = [
        1 => "Comedia",
        2 => "Accion",
        3 => "Ciencia Ficcion",
        4 => "Terror"
    ];

    protected $movies = [
        0 => [
            "title" => "Jurassic Park",
            "awards" => 0,
            "genre_id" => 3,
            "length" => 110
        ],
        1 => [        
            "title" => "Terminator 2",
            "awards" => 0,
            "genre_id" => 3,
            "length" => 140
        ],
        2 => [
            "title" => "Esperando la Carroza",
            "awards" => 0,
            "genre_id" => 1,
            "length" => 115
        ],
        3 => [
            "title" => "Hackers",
            "awards" => 9,
            "genre_id" => 3,
            "length" => 110
        ]
    ];

    public function index(){
        return view('genres')->with('genres',$this->genres);
    }

    public function show($genres){
        
        foreach($this->movies as $movie){
        //cuando queremos llamar en la vista a la pelicula en si (o sea el array dentro del array) llamamos a el $value del foreach ($movie)
           if($movie['genre_id'] == $genres) {
            return view('detalleGenero')->with('movie', $movie);
           } 
        }
    }

//aca se va a crear otro array dentro del array movies o, en la DB, una nueva posicion en la tabla movies
public function create(){
    return view('addActor');
  }
}
