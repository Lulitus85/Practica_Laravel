@extends('master')

@section('content')

<article> 

<h1>Peliculas</h1>
<ul>
    @foreach($movies as $movie)
{{--     preguntar o revisar como funca el href --}}
<li><a href="/movies/{{ $movie['title'] }}"> {{ $movie['title'] }} </a></li>
    @endforeach
</ul>

</article>

@endsection