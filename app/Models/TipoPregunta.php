<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPregunta extends Model
{

    protected $table = 'cat_tipos_pregunta';
    protected $primaryKey = 'idTipoPregunta';

    protected $fillable = [
        'tipoPregunta',
        'eliminado',
    ];
}
