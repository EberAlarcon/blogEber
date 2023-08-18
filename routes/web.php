<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
    return "bienvenido a la pagina proncipal";
});

Route::get('cursos', function(){
    return "Bienvenido a la pagina cursos"; 
});

Route::get('cursos/{curso}', function($curso){
    return "Biemnvenido al curso $curso";

});