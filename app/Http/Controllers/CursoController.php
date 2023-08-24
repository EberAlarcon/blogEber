<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function index(){

        // Colocamos una variable que recibira el modelo de Curso y retornara la variable que contiene todos los cursos
        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        // return $cursos;

        return view('cursos/index', compact('cursos')); 
    }

    public function create(){
        return view('cursos.create');
    }

    //Metodo que se va a encargar de guardar datos de cursos
    public function store(Request $request){
        // return $request->all();  //Para revisar en un json lo que se está enviando
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        // return $curso; // Revisar lo que se quiere enviar
        $curso->save();
        // Que se redireccione al curso creado
        return Redirect()->route('cursos.show', $curso);
    }
    
    // Que me busque por id en la URL de la pagina
    public function show(Curso $curso){   

        //$curso = Curso::find($curso);
        
        return view('cursos.show', compact('curso')); 
         // return view('cursos.show', ['curso' => $curso]); Otra forma 

    }

// -------------------- Metodo para editar registros------------
// -------------------------------------------------------------
    public function edit(Curso $curso){
        // return $id;
        // $curso = Curso::find($curso);
        //return $curso; // Para comprobar que duvuelva el curso tomado por id a recuperar

        return view('cursos.edit', compact('curso'));
    }

    public function update (Curso $curso, Request $request){
        //return $curso;  // Para que retorne lo que se esta enviando
        //return $request->all(); // Para que retorne todo lo que se está enviando
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        // return $curso; // Para saber lo que se esta queriendo actualizar
        $curso->save();
        // // Que se redireccione al curso creado
        return Redirect()->route('cursos.show', $curso);

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


