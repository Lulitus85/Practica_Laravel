@extends('master')

@section('content')

<article> 

<h1>Ficha Actor</h1>


<h2>Nombre: {{ $actor->first_name . " " . $actor->last_name }} </h2>

@if($actor->rating > 0)
<h2> Puntaje: {{ $actor->rating }} </h2>
@endif

{{-- ESTO sirve cuando lo que trae el controlador es una coleccion 
    @foreach($movie as $mov)
<h2> Peli Favorita: {{$mov->title}} </h2>
@endforeach
 --}}

 <h2> Peli Favorita: {{$movie->title}} </h2>


{{-- esto es de cuando era array y no DB 
    @if($actor['best_movie'] != null)
<h2>Mejor Película: {{ $actor['best_movie'] }} </h2>
@endif --}}

<a href="{{ URL::previous() }}"> Volver </a>


</article>

@endsection