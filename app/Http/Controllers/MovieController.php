<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;
use DB;


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
        return view('movies')->with('movies',$movies);
    }
    
    public function show($id){
        $movies = Movie::find($id);
        return view('detallePelicula')
                ->with('movies',$movies);
        
        }

    public function create(){
        return view('addMovie');
    }


    public function store(Request $request){
        //el request es lo que le manda el formulario(post, get, lo que sea)

        //define primero las reglas de los datos a validar
        $reglas = [
            'title' => 'required',
            'rating' => 'required',
            'awards' => 'required',
            'dia' => 'required',
            'mes' => 'required',
            'anio' => 'required',
        ];
        //define un mensaje de error a validar
        $mensaje = [
            'required' => 'El campo :attribute es obligatorio'
        ];
        //valida las 3 variables. que este todas las requeridas y que NO haya errores
        $this->validate($request, $reglas, $mensaje);


        //generar el dato de fecha de creación.
        //request es lo que viene por post en el form de crear peli
        $dia = $request->input('dia');
        $mes = $request->input('mes');
        $anio = $request->input('anio');

        //date_create: es un metodo que reemplaza al date_time()
        $date=date_create($dia . '-' . $mes . '-' . $anio);
        $release_date = date_format($date, "Y-m-d H:i:s");

        //instanciamos la nueva pelicula a subir, le vamos a pasar el nombre de la columna en la tabla, el objeto request y el input con el name.
        $pelicula = new Movie([
            'title'=>$request->input('title'),
            'rating'=>$request->input('rating'),
            'awards'=>$request->input('awards'),
            'length'=>$request->input('length'),
            ('release_date')=>$release_date,
        ]);

        //luego de instancia guardamos el objeto en la base
        $pelicula->save();

        return redirect('/movies');
        //return view('movies');


    }
}


