@extends('master')

@section('content')

<article> 

<h1>Peliculas</h1>
<ul>
    @foreach($movies as $movie)
{{--     preguntar o revisar como funca el href --}}
<li><a href="/movies/{{ $movie->id }}"> {{ $movie->title }} </a></li>
    @endforeach
</ul>

<br>
<br>
<form action="/movies/create" method="get">
<button class="btn btn-light"type="submit"> Agregar Peli! </button>
</form>

</article>

@endsection