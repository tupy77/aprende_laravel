@extends('layouts.plantilla')

@section('title', 'Cursos Index')

@section('content')

    <h1>Bienvenido a la página CURSOS INDEX de cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->name }}</li>
        @endforeach
    </ul>

@endsection