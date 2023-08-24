<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
// ------------------------------------------------------
// --------- Permitimos los campos que se guarde --------
// ------------------------------------------------------
    // protected $fillable = [
    //     'name',
    //     'description',
    //     'categoria'
    // ];
// --------------------------------------------------------------------------------
// --------- Permitimos los campos que se guarde excepto el que se coloque --------
// --------------------------------------------------------------------------------  
    // protected $guarded = ['status'];
    protected $guarded = [];

    public function getRouteKeyName()
    {
         return 'slug';
        
    }

}
