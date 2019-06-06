@extends('master')

@section('content')

<article> 

<h1>Actores</h1>
{{-- <ul>
    @foreach($actors as $actor)
{{--     preguntar o revisar como funca el href --}}
{{-- <li><a href="/actors/{{ $actor['name'] }}"> {{ $actor['name'] }} </a></li>
    @endforeach
</ul> --}}

<ul>
    @foreach($actores as $actor)
    <li>
    <a href="">{{ $actor->first_name . " " . $actor->last_name }}</a>
    </li>
    @endforeach
</ul>

</article>

@endsection