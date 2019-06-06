@extends('master')

@section('content')

<article> 

<h1>Detalle Pelicula</h1>


<h2>Titulo: {{ $pelis->title }} </h2>

@if($pelis->awards > 0)
<h2> Awards: {{ $pelis->awards }} </h2>
@endif

<h2>Duración: {{ $pelis->length }} </h2>


<a href="{{ URL::previous() }}"> Volver </a>
{{-- vuelve a la pagina anterior --}}

</article>

@endsection