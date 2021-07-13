@extends('layouts.plantilla')

@section('title','Lista de estudiantes')

@section('content')

<h1> Lista de estudiantes </h1>


    <table border="1">
    <thread>
        <tr>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Carrera</th>
            <th>Creditos Cursados</th>
            <th>Correo</th>
        </tr>
</thread>

<tbody>
   @foreach($estudiantes as $est)
    <tr>

    <td>
     <a href="{{route('estudiantes.show',$est->id)}}">{{$est->nombre}}</a>
    </a>
    </td>
     <td>{{ $est->codigo }}</td>
      <td>{{ $est->carrera }}</td>
      <td>{{ $est->creditos_cursados }}</td>
      <td>{{ $est->correo }}</td>
        </tr>
    @endforeach
    </tbody>

<button onclick="window.location.href='/estudiantes/create'">Agregar alumno</button>
<br> <br>




@endsection
