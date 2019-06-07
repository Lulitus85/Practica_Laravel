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
<br>
<div class="buscador">
    Buscar Actor 
<input type="search">
<button class="btn btn-light"type="submit"> Buscar! </button>
</div>
<br>
<ul>
    @foreach($actores as $actor)
    <li>
    <a href="/actor/{{$actor->id}}">{{ $actor->first_name . " " . $actor->last_name }}</a>
    </li>
    @endforeach
</ul>

<a href="{{ URL::previous() }}"> Volver </a>

</article>

@endsection