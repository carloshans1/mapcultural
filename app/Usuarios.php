<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = [
        'id',
        'id_login', //ligado a tabela User
        'nome',
        'sobrenome',
        'nome_artistico',
        'inscricao_municipal',
        'rg',
        'cpf',
        'cnpj',
        'nacionalidade',
        'data_nascimento',
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
        'youtube',
        'deficiente', //Determina se o usuario é deficiente fisico (0 Não e 1 sim)
        'tipo_deficiencia'
    ];

    protected $table = 'usuarios';
}
