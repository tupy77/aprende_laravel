@extends('layouts.plantilla')

@section('title', 'Cursos Edit')

@section('content')
    <h1>En esta página podrás EDITAR un curso</h1>
    {{-- formulario --}}
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        
        @csrf
        @method('put')

        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>


        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{ $curso->description }}</textarea>
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>


        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{ $curso->category }}">
        </label>
        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>


        <button type="submit">Actualizar registro</button>
@endsection