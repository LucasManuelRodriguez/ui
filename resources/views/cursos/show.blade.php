@extends('layouts.plantilla')

@section('title', 'Curso '. $curso->name)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('index')}}">Volver a Cursos</a>
    <br>
    <a href="{{route('cursos.edit')}}">Edit</a>
    <p><strong>Categoria: </strong>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection



