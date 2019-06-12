<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre; //siempre agregar el modelo para poder usarlo en el controlador!!!
//use App\Movie; 

class GenreController extends Controller
{
   /* protected $genres = [
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
  } */

    public function index()
    {   
        //$generos = Genre::all()->toArray(); si yo le agrego un toArray(); me convierte la coleccion de objetos a un array asociativo.  
        $generos = Genre::all(); 
        // se puede ver el dd accediendo a la ruta indicada en routes que te lleva al metodo index de este controlador
        return view('genres')->with('generos',$generos);
        // return view('genres')->with('generos', $generos); antes usabamos el $this->generos en el segundo atributo del with porque era un array declarado por fuera de la funcion 
    }

    /* public function show($id){
        $movies = Movie::where('genre_id',$id)->get();
        //siempre que tengo un where tengo que hacer un get();
        $genero = Genre::find($id);
        return view('genreMovies')
        ->with('pelis',$movies)
        ->with('elGenero', $genero);
    }
 */
    //esto me va a traer de la base de datos la pelicula que tenga un ID GENERO igual al id que le paso como parámetro.

    //funcion show con el hasMany del modelo Genre
    public function show($id){
        $movies = Genre::find($id)->movies;
        return view('movies')->with('movies',$movies);     
    
}
}