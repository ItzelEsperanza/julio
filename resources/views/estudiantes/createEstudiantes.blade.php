@extends('layouts.plantilla')

@section('title','Crear')

@section('content')

<form action="{{route('estudiantes.store')}}" method="POST">
    @csrf
    <lable>
   Nombre:
    <br>
    <input type="text" name="nombre" value="{{old('nombre')}}">
    </lable>

        @error('nombre')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable>
    Codigo:
     <br>
    <input type="number" name="codigo" value="{{old('codigo')}}">
    </lable>

         @error('codigo')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror



     <br>
    <lable>
    Carrera:
     <br>
   <input type="text" name="carrera" value="{{old('carrera')}}">
    </lable>

         @error('carrera')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror



     <br>
    <lable>
    Creditos:
     <br>
   <input type="number" name="creditos_cursados" value="{{old('creditos_cursados')}}">
    </lable><br>

        @error('creditos_cursados')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>

     <br>
    <lable>
    Correo:
     <br>
   <input type="text" name="categoria" value="{{old('categoria')}}">
    </lable><br>

        @error('categoria')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>

    <br>
    <button type="submit">Enviar formulario</button>

   
</form>


@endsection
