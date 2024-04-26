<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{

    protected $table = 'tbl_preguntas';
    protected $primaryKey = 'idPregunta';

    protected $fillable = [
        'idFormulario',
        'idTipoPregunta',
        'instrucciones',
        'pregunta',
        'imagen',
        'eliminado',
    ];
}
