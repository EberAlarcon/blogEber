@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>Bienvenido a la pagina principal de editar cursos</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        {{-- ENCARGADO DE GENERAR UN TOKEN --}}
        @csrf

        {{-- ENCARGADO DEL METODO PUT EN HTML --}}
        @method('put')
        <label>
            Nombre:
            <br> 
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br> 

        <label>
            Descripcion:
            <br> 
            <textarea name="description" rows="5">{{$curso->description}}</textarea> 
        </label>
        <br> 

        <label>
            Categoria:
            <br> 
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>

        <button type="submit">Editar Formulario</button>


    </form>
@endsection

