<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajador extends Model
{
	protected $table = 'trabajadores';
	
    protected $fillable = [ 
    	'tipo',
    	'identificacion',
        'Pnombre', 
    	'Papellido',
    	'Sapellido', 
        'sexo',
    	'nacimiento', 
    	'estado',
    	'ciudad',
    	'telefonoF',
    	'telefonoC',
    	'correo',
        'cargo',
    	'inicio',
    	'Hdiarias',
    	'mes',
    	'salario',
    	'comisiones',

    ];

    public $timestamps = false;
}
