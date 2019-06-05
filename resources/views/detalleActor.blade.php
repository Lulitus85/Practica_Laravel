@extends('master')

@section('content')

<article> 

<h1>Ficha Actor</h1>


<h2>Nombre: {{ $actor['name'] }} </h2>

@if($actor['awards'] > 0)
<h2> Awards: {{ $actor['awards'] }} </h2>
@endif


@if($actor['best_movie'] != null)
<h2>Mejor Película: {{ $actor['best_movie'] }} </h2>
@endif

<a href="{{ URL::previous() }}"> Volver </a>


</article>

@endsection