<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        // Colocamos una variable que recibira el modelo de Curso y retornara la variable que contiene todos los cursos
        //$cursos = Curso::all();
        $cursos = Curso::paginate();
        // return $cursos;

        return view('cursos/index', compact('cursos')); 
    }

    public function create(){
        return view('cursos.create');
    }

    // Que me busque por id en la URL de la pagina
    public function show($id){   

        $curso = Curso::find($id);
        
        return view('cursos.show', compact('curso')); 
         // return view('cursos.show', ['curso' => $curso]); Otra forma 

    }

    public function showsCurses($curso, $categoria = null){
        if ($categoria) {
            return view('cursos/showsCurses', compact('curso', 'categoria'));
            # code...
        } else {
            return $this->show($curso);
            
        }
        
    }

}


