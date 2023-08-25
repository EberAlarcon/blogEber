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

Route::get('/', HomeController::class)->name('home');

// // ------------------------------------------------------------------------------
// // --------------------------- Crear un grupo de rutas --------------------------
// // ------------------------------------------------------------------------------

 Route::controller(CursoController::class)-> group(function(){

     Route::get('cursos', 'index')->name('cursos.index');
// //-------------------------------------------------------------------------
// //---------------------Ruta para crear los datos --------------------------
// //-------------------------------------------------------------------------
     Route::get('cursos/create', 'create')->name('cursos.create');
     Route::post('cursos', 'store')->name('cursos.store');

// // ----------------------------------------------------------------------------
// // ----------------Ruta para ver un registro en particular --------------------
// // ----------------------------------------------------------------------------
     Route::get('cursos/{curso}', 'show')->name('cursos.show');
    
// //---------------------------------------------------------------------
// // -------------------Para actualizar los regitros --------------------
// //---------------------------------------------------------------------
     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
     Route::put('cursos/{curso}', 'update')->name('cursos.update');

// //---------------------------------------------------------------------
// // -------------------- Para eliminar los regitros --------------------
// //---------------------------------------------------------------------    
    Route::delete('cursos/{curso}', 'delete')->name('cursos.delete');

// //--------------------------------------------------------------------------------
// // -------------------- Ruta que la pagina sera solo estatica --------------------
// //-------------------------------------------------------------------------------- 
    Route::view('nosotros', 'nosotros')->name('nosotros');

    
//     Route::get('cursos/{curso}/{categoria?}', 'showsCurses' )->name('');   
 });

// ----------------------------------------------------------------------------
// ----------------------- Otra manera de crear rutas -------------------------
// ----------------------------------------------------------------------------
// Route::resource('cursos', CursoController::class);

// ----------------------------------------------------------------------------
// -------------- Para modificar las rutas con las variables ------------------
// ----------------------------------------------------------------------------
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');
