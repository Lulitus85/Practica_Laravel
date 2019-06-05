<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    protected $actors = [
        0 => [
            "name" => "Jorge Porcel",
            "awards" => 0,
            "best_movie" => null
        ],
        1 => [        
            "name" => "Robert Patrick",
            "awards" => 0,
            "best_movie" => "Terminator 2"
        ],
        2 => [
            "name" => "Sam Neill",
            "awards" => 1,
            "best_movie" => "Jurassic Park"
        ]
    ];

    public function index(){
        return view('actors')->with('actors',$this->actors);
    }

    public function show($name){
        
        foreach($this->actors as $actor){
        //cuando queremos llamar en la vista a la pelicula en si (o sea el array dentro del array) llamamos a el $value del foreach ($movie)
           if($actor['name'] == $name){
            return view('detalleActor')->with('actor', $actor);
           } 
        }
    }

//aca se va a crear otro array dentro del array movies o, en la DB, una nueva posicion en la tabla movies
public function create(){
    return view('addActor');
  }

}
