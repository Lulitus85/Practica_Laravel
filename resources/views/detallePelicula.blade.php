@extends('master')

@section('content')

<article> 

<h1>Detalle Pelicula</h1>


<h2>Titulo: {{ $movie['title'] }} </h2>

@if($movie['awards'] > 0)
<h2> Awards: {{ $movie['awards'] }} </h2>
@endif

<h2>Duración: {{ $movie['length'] }} </h2>


<a href="{{ URL::previous() }}"> Volver </a>


</article>

@endsection