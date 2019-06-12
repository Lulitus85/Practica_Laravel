<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class ActorsController extends Controller
{
    /* protected $actors = [
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
*/
    public function index()
    {   
        //$generos = Genre::all()->toArray(); si yo le agrego un toArray(); me convierte la coleccion de objetos a un array asociativo.  
        $actores = Actor::all(); 
        // se puede ver el dd accediendo a la ruta indicada en routes que te lleva al metodo index de este controlador
        return view('actors')->with('actores', $actores);
        // return view('genres')->with('generos', $generos); antes usabamos el $this->generos en el segundo atributo del with porque era un array declarado por fuera de la funcion 
    }

    public function show($id){
        $actor = Actor::find($id);
       // dd($actor);
        $favorite = $actor->favorite_movie_id;
       // dd($favorite);
       
       
       // $movie = Movie::where('id',$favorite)->get();
       // dd($movie); 
       //asi trae una coleccion: hay que hacer un foreach de esto ultimo ya que es un collection(y no un objeto), para que lo recorra 

       //asi SI trae un objeto
       $movie = Movie::find($favorite);
       // dd($movie);
        return view('detalleActor')
                ->with('actor',$actor)
                ->with('movie',$movie);
        
        }

    
    public function search($nombre){
        //
    }





}
