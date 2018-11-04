<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposCulturais extends Model
{
    //
    protected $fillable = [
        'id',
        'Nome_Grupo',
        'Razao_Social',
        'cnpj',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'telefone',
        'celular',
        'whatsapp',
        'email',
        'website',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'breve_apresentacao' // (diga o que faz)
    ];

    protected $table = 'GruposCulturais';
}
