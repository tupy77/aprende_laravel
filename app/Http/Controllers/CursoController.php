<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        //return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($curso)
    {
        return view('cursos.show', ['curso' => $curso]);
        // OTRO MODO
        //return view('cursos.show', compact('curso'));
    }
}
