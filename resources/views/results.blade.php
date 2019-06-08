@extends('master')

@section('content')

@if(count($results) > 1)

<ul>
    @foreach($results as $result)
        <li>
            {{ $result->first_name . " " . $result->last_name }}
        </li>
    @endforeach

</ul>
@else
    <h1> {{$results->first_name . " " . $results->last_name}} </h1>
    <h3> Puntaje: {{$results->rating}} </h3>


@endif




<a href="{{ URL::previous() }}"> Volver </a>

@endsection