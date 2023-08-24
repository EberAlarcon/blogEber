<?php

use Illuminate\Support\Facades\Route;

// Especificar el controlador a utilizar
use App\Http\Controllers\HomeController;

// Especificar el controlador de CursoController
use App\Http\Controllers\CursoController;
use Illuminate\Routing\Route as RoutingRoute;

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
//------------------Ruta para crear los datos--------------------------
    Route::post('cursos', 'store')->name('cursos.store');

// ----------------------------------------------------------------------------
// ----------------Ruta para ver un registro en particular --------------------
// ----------------------------------------------------------------------------
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    
//---------------------------------------------------------------------
// -------------------Para actualizar los regitros --------------------
//---------------------------------------------------------------------
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name(('cursos.update'));

//---------------------------------------------------------------------
// -------------------- Para eliminar los regitros --------------------
//---------------------------------------------------------------------    
    Route::delete('cursos/{curso}', 'delete')->name('cursos.delete');

    
    Route::get('cursos/{curso}/{categoria?}', 'showsCurses' )->name('');

    
});