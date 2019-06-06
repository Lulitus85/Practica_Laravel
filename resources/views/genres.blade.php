@extends('master')

@section('content')

<article> 

{{-- esto es con los arrays hardcoredeados 
    <h1>Actores</h1>
<ul>
    @for($i=1; $i <=4 ; $i++)
{{--     preguntar o revisar como funca el href --}}
{{-- <li><a href="/genres/{{ $genres[$i] }}"> {{ $genres[$i] }} </a></li>
    @endfor
</ul> --}}
<ul>
    @foreach($generos as $genero)
    <li>
    <a href=" /genres/{{$genero->id}} ">{{ $genero->name }}</a>
    </li>
    @endforeach
</ul>

</article>

@endsection