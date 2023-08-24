@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1> <strong>Bienvenido a la pagina principal de cursos</strong></h1>

    <a href="{{route('cursos.create')}}">Crear curso</a>

    <ul>
        @foreach ($cursos as $curso)
          <li> 
            <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a> 

            <br>
            {{route('cursos.show', $curso)}}
            
            {{-- {{route('cursos.show', 'abc')}} --}}
          </li>  
          
        @endforeach
    </ul>

    {{$cursos->links()}}


@endsection

