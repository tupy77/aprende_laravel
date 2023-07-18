<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos'); // SI NO SE PONE PARAMETERS DARIA ERROR, YA QUE MODIFICAMOS EL NOMBRE DE LA URL Y EL DE LOS  PARAMETROS QUE SE ENVIAN, O SE CAMBIAN TODO ESO EN TODAS LAS VIEWS, O SE PONE LA FUNCION PARAMETERS PARA CAMBIARLO Y DEJAR QUE SIGAN COMO ESTABAN//->parameters(['asignaturas' => 'curso']); //->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']); //->except(['edit', 'update', 'destroy']);