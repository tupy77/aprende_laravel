<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos'); // SI NO SE PONE PARAMETERS DARIA ERROR, YA QUE MODIFICAMOS EL NOMBRE DE LA URL Y EL DE LOS  PARAMETROS QUE SE ENVIAN, O SE CAMBIAN TODO ESO EN TODAS LAS VIEWS, O SE PONE LA FUNCION PARAMETERS PARA CAMBIARLO Y DEJAR QUE SIGAN COMO ESTABAN//->parameters(['asignaturas' => 'curso']); //->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']); //->except(['edit', 'update', 'destroy']);

Route::view('nosotros', 'nosotros')->name('nosotros'); // Se pone view en vez de get, ya que no se va a hacer ninguna consulta a la base de datos, solo se va a mostrar una vista, pagina estatica...etc

Route::get('contactanos', function () {
        $correo = new ContactanosMailable;
        Mail::to('tupy1977@gmail.com')->send($correo); // Se envia el correo a la direccion que se pone en el to
        return "Mensaje enviado";
    })->name('contactanos');