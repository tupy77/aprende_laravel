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

//quiero que se conecte a la principal de jetstream
// Route::get('/', function () {
//     return view('welcome');
// });

//METIDO EN EL HOMECONTROLER LA VIEW DE JETSTREAM
Route::get('/', HomeController::class)->name('home');

// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');
// VOLVEMOS A PONER EL NOMBRE DE CURSOS
Route::resource('cursos', CursoController::class)->names('cursos');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::controller(ContactanosController::class)->prefix('contactanos')->group(function () {
    Route::get('/', 'index')->name('contactanos.index');
    Route::post('/', 'store')->name('contactanos.store');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
