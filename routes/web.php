<?php

use Illuminate\Support\Facades\Route;

// Especificar el controlador a utilizar
use App\Http\Controllers\HomeController;

// Especificar el controlador de CursoController
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


// Crear un grupo de rutas

Route::controller(CursoController::class)-> group(function(){

    Route::get('cursos', 'index')->name('cursos.index');

    Route::get('cursos/create', 'create')->name('cursos.create');
    
    Route::get('cursos/{id}', 'show')->name('cursos.show');
    
    Route::get('cursos/{curso}/{categoria?}', 'showsCurses' )->name('');
});