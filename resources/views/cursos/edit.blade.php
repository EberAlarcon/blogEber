@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>Bienvenido a la pagina principal de editar cursos</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        {{-- ENCARGADO DE GENERAR UN TOKEN --}}
        @csrf

        {{-- ENCARGADO DEL METODO PUT EN HTML --}}
        @method('put')
        {{-- Se mantiene los datos, y si edita y falta algun dato en otro registo, este lo mantiene --}}
        <label>
            Nombre:
            <br> 
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br> 
        @enderror
        <br> 

        <label>
            Descripcion:
            <br> 
            <textarea name="description" rows="5">{{old('description',$curso->description)}}</textarea> 
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br> 
        @enderror

        <br> 

        <label>
            Categoria:
            <br> 
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br> 
        @enderror

        <br>

        <button type="submit">Editar Formulario</button>


    </form>
@endsection

