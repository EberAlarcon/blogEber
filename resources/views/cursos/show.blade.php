@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Su curso es de {{$curso->name}} </h1>
    
    <a href="{{route('cursos.index')}}">Volver a cursos</a>

    <p><strong>Categoria: {{$curso->categoria}} </strong></p>
    <p> {{$curso->description}} </p>
@endsection


