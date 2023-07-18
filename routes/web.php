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

Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index')->name('cursos.index'); //nombre de la ruta
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy'); // COMO PONER SE PODRIA PONER EL METODO PUT, PERO SE REPETIRIA LA URL Y NO SERIA CORRECTO. POR ESO SE PONE DELETE.
});


//TAMBIEN SE PUEDE HACER ASI
// Route::group(['prefix' => 'cursos'], function () {
//         Route::get('/', [CursoController::class, 'index']); //CADA UNO DE ESTOS GET SE PUEDEN PONER POR INDIVIDUAL
//         Route::get('create', [CursoController::class, 'create']);
//         Route::get('{curso}', [CursoController::class, 'show']);
//     });

