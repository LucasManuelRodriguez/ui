@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
        <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Descripcion:
        <br>
            <textarea name="description" rows="5"></textarea>
        </label>

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="category">
        </label>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection