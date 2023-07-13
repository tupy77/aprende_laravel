<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Cursos';
    }

    public function create()
    {
        return 'Crear curso';
    }

    public function show($curso)
    {
        return "Curso: $curso";
    }
}
