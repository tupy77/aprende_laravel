<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
    
</head>
<body>

    <header>
        <h1>Pagina de cursos</h1>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Inicio</a>
                    <?php
                        dump(request()->routeIs('home')); //esto devuelve true o false si la ruta es la que se indica
                    ?>
                </li>
                <li>
                    <a href="{{ route('cursos.index') }}">Cursos</a>
                    @dump(request()->routeIs('cursos.*'))<!-- esto es lo mismo que lo de arriba -->
                </li>
                <li>
                    <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}" >Nosotros</a> <!--con el dump vemos que devuelve true o false y ahora lo que hacemos es que si es true se ponga la clase 'active' -->
                </li>
            </ul>
        </nav>

    </header>

    @yield('content')
    
</body>
</html>