<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    

    protected $table        = 'tbl_tareas';
    protected $primaryKey   = 'id_tarea';
    public    $timestamps   = true;

    protected $fillable = [
		'str_descripcion',
		'str_autor',
		'str_estado',
		'dt_fecha_inicio',
		'dt_fecha_fin',
		'bool_estado',
	];
}
