@extends('master')

@section('content')

<article> 

<h1>Detalle Pelicula</h1>


<h2>Titulo: {{ $movies['title'] }} </h2>

@if($movies['awards'] > 0)
<h2> Premios: {{ $movies['awards'] }} </h2>
@endif

<h2>Duración: {{ $movies['length'] }} </h2>


<a href="{{ URL::previous() }}"> Volver </a>
{{-- vuelve a la pagina anterior --}}

</article>

@endsection