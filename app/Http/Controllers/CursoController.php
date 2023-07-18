<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate(); //DENTRO DE LOS PARENTESIS SE PUEDE PONER EL NUMERO DE REGISTROS POR PAGINA. Se paginan los cursos pero habria que escribir en el cliente cursos?page=2 ... para ver la segunda pagina y asi sucesivamente. Para que no sea necesario se tendria que modificar la vista añadiendo lo siguiente:
        // {{ $cursos->links() }}


        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request) {

        // // ANTIGUA FORMA
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        //ASIGNACION MASIVA:

        // EL PASO 1 SERIA EL SIGUIENTE:
        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]);
        
        //LO ANTERIOR VALDRIA PERO PODRIAMOS PASARLE EL ARRAY DE LA SIGUIENTE FORMA:
        $curso = Curso::create($request->all()); // SI NO SE AÑADE LA PROPIEDAD FILLABLE EN EL MODELO, NO SE PODRA HACER ESTO. HAY QUE AÑADIRLA PARA QUE SE PUEDA HACER LA ASIGNACION MASIVA.

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        
        $curso->update($request->all()); // ASIGNACION MASIVA EN EL UPDATE. SI NO SE AÑADE LA PROPIEDAD FILLABLE EN EL MODELO, NO SE PODRA HACER ESTO. HAY QUE AÑADIRLA PARA QUE SE PUEDA HACER LA ASIGNACION MASIVA.

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
