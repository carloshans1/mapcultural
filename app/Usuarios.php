<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = [
        'id',
        'id_login',
        'nome',
        'sobrenome',
        'nome_artistico',
        'inscricao_municipal',
        'rg',
        'cpf',
        'cnpj',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'pais',
        'telefone',
        'celular',
        'whatsapp',
        'email',
        'website',
        'facebook',
        'instagram',
        'twitter',
        'youtube'
    ];

    protected $table = 'usuarios';
}
