<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

use App\Http\Controllers\ContactanosController;


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

Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::controller(ContactanosController::class)->prefix('contactanos')->group(function () {
    Route::get('/', 'index')->name('contactanos.index');
    Route::post('/', 'store')->name('contactanos.store');
});

