@extends ('layouts.plantilla')

@section('title', 'Cursos Show: ' . $curso->name)

@section('content')
    <h1>Cursos Show: {{ $curso->name }}</h1>
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    {{-- <a href="{{route('cursos.edit', $curso)}}">Editar curso</a> --}}
    <p><strong>Categoría: </strong>{{$curso->category}}</p>
    <p>Descripcion: {{$curso->description}}</p>
    {{-- <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form> --}}
@endsection