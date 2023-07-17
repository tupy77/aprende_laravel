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
    Route::get('cursos/{id}', 'show')->name('cursos.show');
});


//TAMBIEN SE PUEDE HACER ASI
// Route::group(['prefix' => 'cursos'], function () {
//         Route::get('/', [CursoController::class, 'index']); //CADA UNO DE ESTOS GET SE PUEDEN PONER POR INDIVIDUAL
//         Route::get('create', [CursoController::class, 'create']);
//         Route::get('{curso}', [CursoController::class, 'show']);
//     });

