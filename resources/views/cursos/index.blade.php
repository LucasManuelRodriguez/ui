@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')

    <header>
        <x-header />
    </header>
    <br>
    <h1>Bienvenido a la pagina de los cursos</h1>
    @auth
        <section>
            <a href="{{route('cursos.create')}}">Crear curso</a>
        </section>
    
    @endauth
    
     <ul>
         @foreach ($cursos as $curso)
            <li>
                 <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
                 <p>{{$curso->autor->name}}</p>
            </li>
         @endforeach
     </ul>

     {{$cursos->links()}}
@endsection