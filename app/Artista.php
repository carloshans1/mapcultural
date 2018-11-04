<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $fillable = [
        'id',
        'id_usuario',
        'nome_artistico',
        'id_segmentocultural',
        'breve_apresentacao', // (o que faz o artista) 
        'id_grupocultural',    // 0 para Individual ou ID do Grupo, caso seja de um grupo
        'observacao'

    ];

    protected $table = 'Artista';
}
