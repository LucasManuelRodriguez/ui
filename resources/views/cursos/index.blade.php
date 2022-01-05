@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina de los cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
     <ul>
         @foreach ($cursos as $curso)
             <li>{{$curso->name}}</li>
         @endforeach
     </ul>

     {{$cursos->links()}}
@endsection