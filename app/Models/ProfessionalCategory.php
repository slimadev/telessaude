<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\SimpleEntity;

class ProfessionalCategory extends Model
{
    const DATA = [
                    [
                        'key'=>['code'=>'30','descrption'=>'Administração Hospitalar','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de administração hospitalar'],
                          ['description'=>'Técnico de administração hospitalar'],
                          ['description'=>'Técnico de Manutenção e Equipamento Hospitalar'],
                          ['description'=>'Técnico de administração hospitalar A'],
                          ['description'=>'Técnico de administração hospitalar B']

                        ]
                    ],
                    [
                        'key'=>['code'=>'31','descrption'=>'ESMI','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Enfermeiro de saúde materno-infantil'],
                          ['description'=>'Parteira elementar'],
                          ['description'=>'Enfermeiro de saúde materno infantil'],
                          ['description'=>'Enfermeiro parteiro'],
                          ['description'=>'Enfermeira de Saúde Materna A'],
                          ['description'=>'Enfermeiro de saúde materno-infantil B'],
                          ['description'=>'Enfermeiro de SMI A']

                        ]
                    ],
                    [
                        'key'=>['code'=>'32','descrption'=>'Cirurgia','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Técnico de cirurgia'],
                          ['description'=>'Técnico de cirurgia A']
                        ]
                    ],
                    [
                        'key'=>['code'=>'33','descrption'=>'Nutrição','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de nutrição'],
                          ['description'=>'Técnico de nutrição'],
                          ['description'=>'Nutricionista A']

                        ]
                    ],
                    [   
                        'key'=>['code'=>'34','descrption'=>'Farmácia','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de farmácia'],
                          ['description'=>'Auxiliar de farmácia'],
                          ['description'=>'Técnico de farmácia'],
                          ['description'=>'Farmacêutico A'],
                          ['description'=>'Técnico de farmácia B']
                        ]
                    ],
                    [
                        'key'=>['code'=>'35','descrption'=>'Radiologia','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Técnico de radiologia'],
                          ['description'=>'Técnico de Radiologia A'],
                          ['description'=>'Técnico de radiologia B']
                        ]
                    ],
                    [   
                        'key'=>['code'=>'36','descrption'=>'Enfermagem','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Enfermeiro'],
                          ['description'=>'Enfermeiro elementar'],
                          ['description'=>'Enfermeiro geral'],
                          ['description'=>'Enfermeira Pediátrica A'],
                          ['description'=>'Enfermeiro A'],
                          ['description'=>'Enfermeiro B']
                        ]
                    ],
                    [
                        'key'=>['code'=>'37','descrption'=>'Laboratório','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de laboratório'],
                          ['description'=>'Técnico de laboratório D'],
                          ['description'=>'Auxiliar técnico de laboratório'],
                          ['description'=>'Microscopista'],
                          ['description'=>'Técnico de laboratorio'],
                          ['description'=>'Técnico de laboratório'],
                          ['description'=>'Técnico de laboratório C'],
                          ['description'=>'Técnico de laboratório A'],
                          ['description'=>'Técnico de laboratório B'],

                        ]
                    ],
                    [
                        'key'=>['code'=>'38','descrption'=>'Oftalmologia','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Técnico de oftalmologia'],
                          ['description'=>'Tecnico De Optometria'],
                          ['description'=>'Optometra A']
                        ]
                    ],
                    [
                        'key'=>['code'=>'39','descrption'=>'Ortoprotesia','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Técnico de prótese'],
                          ['description'=>'Técnico de prótese B']
                        ]
                    ],
                    [
                        'key'=>['code'=>'40','descrption'=>'Anestesiologia','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Técnico de anestesiologia'],
                          ['description'=>'Anestesita A'],
                          ['description'=>'Técnico de anestesiologia B']
                        ]
                    ],
                    [
                        'key'=>['code'=>'41','descrption'=>'Instrumentação','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Técnico de instrumentação'],
                          ['description'=>'Instrumentista A'],
                          ['description'=>'Técnico de instrumentação B']
                        ]
                    ],
                    [
                        'key'=>['code'=>'42','descrption'=>'Medicina Curativa','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de medicina'],
                          ['description'=>'Técnico de medicina'],
                          ['description'=>'Assistente'],
                          ['description'=>'Consultor'],
                          ['description'=>'Especialista Assistente em Medicina Hospitalar'],
                          ['description'=>'Especialista Assistente em Oromaxilofacial'],
                          ['description'=>'Especialista Consultor em Medicina Hospitalar'],
                          ['description'=>'Especialista Principal em Medicina Familiar e Comunitária'],
                          ['description'=>'Especialista Principal em Medicina Hospitalar'],
                          ['description'=>'Interno de 1ª'],
                          ['description'=>'Interno de 2ª'],
                          ['description'=>'Médico de Clínica Geral de 1ª'],
                          ['description'=>'Médico de Clínica Geral de 2ª'],
                          ['description'=>'Médico de Clínica Geral Principal'],
                          ['description'=>'Principal'],
                          ['description'=>'Técnico de medicina B']

                        ]
                    ],
                    [
                        'key'=>['code'=>'43','descrption'=>'Medicina Preventiva','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de medicina preventiva'],
                          ['description'=>'Técnico de medicina preventiva'],
                          ['description'=>'Assistente'],
                          ['description'=>'Consultor'],
                          ['description'=>'Especialista Consultor em Saúde Pública'],
                          ['description'=>'Especilaista Assistente em Saúde Pública'],
                          ['description'=>'Técnico de medicina preventiva B'],
                          ['description'=>'Técnico de saude publica A']
                        ]
                    ],
                    [
                        'key'=>['code'=>'44','descrption'=>'Odontoestomatologia','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de Estomatologia'],
                          ['description'=>'Agente de odontoestomatologia'],
                          ['description'=>'Auxiliar técnico de odontoestomatologia'],
                          ['description'=>'Técnico de odontoestomatologia'],
                          ['description'=>'Médico Dentista Geral de 1ª'],
                          ['description'=>'Médico Dentista Geral de 2ª'],
                          ['description'=>'Médico Dentista Geral Principal'],
                          ['description'=>'Odontoestomatologista A']

                        ]
                    ],
                    [
                        'key'=>['code'=>'45','descrption'=>'Otorrinolaringologia','type'=> 'CATEGORIA'],
                        'values'=>[['description'=>'Técnico de otorrinolaringologia']]
                    ],
                    [
                        'key'=>['code'=>'46','descrption'=>'Estatística Sanitária','type'=> 'CATEGORIA'],
                        'values'=>[['description'=>'Técnico de estatística sanitária']]
                    ],
                    [
                        'key'=>['code'=>'47','descrption'=>'Psiquiatria e saúde mental','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Técnico de psiquiatria'],
                          ['description'=>'Técnico de psiquiatria e saúde mental'],
                          ['description'=>'Psicólogo clínico A'],
                          ['description'=>'Terapeuta Ocupacional A']
                        ]
                    ],
                    [
                        'key'=>['code'=>'48','descrption'=>'Medicina Física e Reabilitação','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de medicina física e reabilitação'],
                          ['description'=>'Auxiliar de reabilitação']  ,           
                          ['description'=>'Técnico de medicina fisica e Reabilitação'],
                          ['description'=>'Fisioterapeuta A'],
                          ['description'=>'Fisioterapeuta B'],
                          ['description'=>'Técnico de medicina física e reabilitação B']
                        ]
                    ],
                    [
                        'key'=>['code'=>'49','descrption'=>'Outros','type'=> 'CATEGORIA'],
                        'values'=>[
                          ['description'=>'Agente de electromedicina'],
                          ['description'=>'Agente de entomologia'],
                          ['description'=>'Agente de transladação'],
                          ['description'=>'Operador de electrocardiografia'],
                          ['description'=>'Auxiliar técnico de electromedicina'],
                          ['description'=>'Técnico de electromedicina'],
                          ['description'=>'Técnico de radioterapia'],
                          ['description'=>'Especialista da Saúde'],
                          ['description'=>'Técnico de radioterapia B']
                        ]
                    ],

                ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(SimpleEntity::class,'area_id');
    }
    use HasFactory;
    public $timestamps = false;
}
