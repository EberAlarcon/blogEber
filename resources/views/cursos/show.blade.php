@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Su curso es de {{$curso->name}} </h1>
    
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>

    <a href="{{route('cursos.edit', $curso)}}">Editar cursos</a>

    <p><strong>Categoria: {{$curso->categoria}} </strong></p>
    <p> {{$curso->description}} </p>

    <form action="{{route('cursos.delete', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection


