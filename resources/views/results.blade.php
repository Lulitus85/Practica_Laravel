@extends('master')

@section('content')

@if(count($results) > 1)

<ul>
    @foreach($results as $result)
        <li>
            <a href="/actor/{{$result->id}}">{{ $result->first_name . " " . $result->last_name }} </a>
        </li>
    @endforeach

</ul>
@else
    @foreach($results as $result)
    <h1> {{$result->first_name . " " . $result->last_name}} </h1>
    <h3> Puntaje: {{$result->rating}} </h3>
    @endforeach

@endif




<a href="{{ URL::previous() }}"> Volver </a>

@endsection