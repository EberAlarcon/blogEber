<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // Usamos el metodo __invoke cuando adminitremos una unica ruta
    public function __invoke()
    {
        return "Bienvenido a la pagina HOME"; 
    }
}
