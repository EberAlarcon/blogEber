<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos/index'); 
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', ['curso' => $curso]);

        // return view('cursos.show', compact('curso'));  Otra forma 


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


