<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{   
    //

    /* protected $movies = [
        0 => [
            "id"=>1,
            "title" => "Jurassic Park",
            "awards" => 0,
            "genre_id" => 3,
            "length" => 110
        ],
        1 => [   
            "id"=>2,     
            "title" => "Terminator 2",
            "awards" => 0,
            "genre_id" => 3,
            "length" => 140
        ],
        2 => [
            "id"=>3,
            "title" => "Esperando la Carroza",
            "awards" => 0,
            "genre_id" => 1,
            "length" => 115
        ],
        3 => [
            "id"=>4,
            "title" => "Hackers",
            "awards" => 9,
            "genre_id" => 3,
            "length" => 110
        ]
    ];

    public function index(){
        return view('movies')->with('movies',$this->movies);
    }

    public function show($title){
        
        foreach($this->movies as $movie){
        //cuando queremos llamar en la vista a la pelicula en si (o sea el array dentro del array) llamamos a el $value del foreach ($movie)
           if($movie['title'] == $title){
            return view('detallePelicula')->with('movie', $movie);
           } 
        }
    }
   //aca se va a crear otro array dentro del array movies o, en la DB, una nueva posicion en la tabla movies
    public function create(){
      return view('addMovie');
    } */

    public function index(){
        $movies = Movie::all();
        return view('movies')->with('pelis',$movies);
    }
    
    public function show($id){
        $pelis = Movie::where('id', $id)->get();
        return view('detallePelicula')->with('pelis',$pelis);
        
        }
}


