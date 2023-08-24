@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>Bienvenido a la pagina principal de crear cursos</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        {{-- ENCARGADO DE GENERAR UN TOKEN --}}
        @csrf
        {{-- Un label e input donde el nombre este validado y el value es para que si en los demas campos faltan datos, este se mantenga con el registro --}}
        <label>
            Nombre:
            <br> 
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        {{-- Para manejar errores de validaciones --}}
        @error('name')
            <br>
            <small> {{$message}} </small>
            <br>
        @enderror
        <br> 

        <label>
            Descripcion:
            <br> 
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>
        {{-- Para manejar errores de validaciones --}}
        @error('description')
        <br>
        <small> {{$message}} </small>
        <br>
        @enderror
        <br> 

        <label>
            Categoria:
            <br> 
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        {{-- Para manejar errores de validaciones --}}
        @error('categoria')
        <br>
        <small> {{$message}} </small>
        <br>
        @enderror
        <br>

        <button type="submit">Enviar Formulario</button>


    </form>
@endsection

