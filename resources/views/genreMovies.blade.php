@extends('master')
@section('content')

<h1>Peliculas del género: {{ $elGenero->name }} </h1>
<ul>
    @foreach($pelis as $peli)
    <li>
    <a href="/movies/{{$peli->id}} ">{{ $peli->title }}</a>
    </li>
    @endforeach
</ul>

<a href="/genres" class="btn btn-info"> VOLVER </a>


@endsection