<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{

    protected $table = 'tbl_formularios';
    protected $primaryKey = 'idFormulario';

    protected $fillable = [
        'nombre',
        'indicaciones',
        'eliminado',
    ];
}
