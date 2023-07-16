@extends('layouts.plantilla')

@section('title', 'Cursos Index')

@section('content')

    <h1>Bienvenido a la página CURSOS INDEX de cursos</h1>

    {{-- <a href="cursos/create">Crear curso</a> This is the same as the above line --}}
    <a href="{{ route('cursos.create') }}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a> {{-- Lo de dentro del route es el id del curso --}}
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
    {{-- {{ $cursos->render() }} --}}
    {{-- {{ $cursos->links('pagination::bootstrap-4') }}
    {{ $cursos->links('pagination::tailwind') }} --}}
@endsection