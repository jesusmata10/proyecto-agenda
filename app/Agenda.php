<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['nombres', 'apellidos', 'telefono', 'celular', 'genero', 'email', 'posicion', 'departamento', 'salario', 'fechadenacimiento', 'direccion'];

    
}
