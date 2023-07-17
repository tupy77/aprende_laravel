<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id','desc')->paginate(); //DENTRO DE LOS PARENTESIS SE PUEDE PONER EL NUMERO DE REGISTROS POR PAGINA. Se paginan los cursos pero habria que escribir en el cliente cursos?page=2 ... para ver la segunda pagina y asi sucesivamente. Para que no sea necesario se tendria que modificar la vista añadiendo lo siguiente:
        // {{ $cursos->links() }}


        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show($id)
    {
        $curso = Curso::find($id); //PARA RECUPERAR UN REGISTRO COMPLETO POR SU ID

        return view('cursos.show', compact('curso'));
    // OTRO MODO
        // return view('cursos.show', ['curso' => $curso]);
    }
}
