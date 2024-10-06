@extends('layout')

@section('content')

    <h1>{{$aitool->name}} {{$aitool->hasFreePlan ? 'yes' : 'no'}}</h1>
    <h2>Kategória: {{$aitool->category->name}}</h2>
    <p>{{$aitool->description}}</p>
    <a href="{{$aitool->link}}">{{$aitool->link}}</a>
    <small>{{$aitool->price}}</small>
@endsection
