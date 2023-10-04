<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SimpleEntity;

class Document extends Model
{
    const DATA = [
        [
            'key'=>['code'=>'60','descrption'=>'Cólera','type'=> 'PROGRAMA'],
            'values'=>[
              ['name'=>'Tabela de reidratação (Plano B)','url'=>'Anexo I'],
              ['name'=>'Tabela de reidratação em crianças com mais de 5 anos e adultos (Plano C)','url'=>'Anexo II'],
              ['name'=>'Tabela de reidratação em crianças com menos de 5 anos (Plano C)','url'=>'Anexo III'],
              ['name'=>'Tabela de reidratação em crianças desnutridas (Plano C)','url'=>'Anexo IV'],
            ]
        ],
        [
            'key'=>['code'=>'61','descrption'=>'Malária','type'=> 'PROGRAMA'],
            'values'=>[
                ['name'=>'Dose de Aleméter – Lumefantrina','url'=>'Anexo V'],
                ['name'=>'Procedimento de preparação de Artesunato (AS)','url'=>'Anexo VI'],
                ['name'=>'Dose de Aleméter – Lumefantrina 2','url'=>'Anexo VII'],
            ]
        ]
    ];

    public function program()
    {
        return $this->belongsTo(SimpleEntity::class,'program_id');
    }
    use HasFactory;

}
