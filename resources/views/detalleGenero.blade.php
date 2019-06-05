@extends('master')

@section('content')

<article> 

        <h1>Pelicula</h1>
        
        
        <h2>Nombre: {{ $movie['title'] }} </h2>
        
        
        <h2> Género: {{ $movie['genre_id'] }} </h2>
       
        
        
        
        <a href="{{ URL::previous() }}"> Volver </a>
        
        
        </article>

@endsection