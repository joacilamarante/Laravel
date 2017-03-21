<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoModel extends Model
{
     protected $fillable = [
        'titulo', 'descricao', 'valor', 'image', 'publicado'
    ];
}
