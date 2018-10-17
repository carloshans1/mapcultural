<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SegmentosCulturais extends Model
{
    protected $fillable = [
        'id',
        'id_usuario',
        'id_listasegmento', 
        'tiposegmento', // 1 para Individual ou 2 para Grupo
        'id_grupocultural' // Caso seja de um grupo

    ];

    protected $table = 'SegmentosCulturais';
}
