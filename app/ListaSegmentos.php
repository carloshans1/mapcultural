<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaSegmentos extends Model
{
    protected $fillable = [
        'id',
        'segmento'
        /*  Teatro,  Dança,  Ópera,  Circo,  Mímica, Produção Cinematográfica,
            Videográfica, Fotográfica, Discográfica, Literatura,  Música,
            Artes Plásticas, Artes Gráficas, Gravuras, Cartazes, Filatelia
            Folclore, Cia. de Reis, Artesanato, Técnica de Artesanato,  
            Patrimônio cultural, Rádio, Televisão educativa e 
            cultural de caráter não comercial, Cultura Negra, Afro reggae,
            Capoeira, Cultura indígena;
        */
    ];

    protected $table = 'ListaSegmentos';
}
