<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProfessionalCategory;
use App\Models\Document;

class SimpleEntity extends Model
{    const DATA = [
                    ['code'=>'10','descrption'=>'Maputo','descrption'=>'Maputo', 'type'=> 'PROVINCIA'],
                    ['code'=>'11','descrption'=>'Gaza', 'type'=> 'PROVINCIA'],
                    ['code'=>'12','descrption'=>'Inhambane', 'type'=> 'PROVINCIA'],
                    ['code'=>'13','descrption'=>'Sofala', 'type'=> 'PROVINCIA'],
                    ['code'=>'14','descrption'=>'Manica', 'type'=> 'PROVINCIA'],
                    ['code'=>'15','descrption'=>'Tete', 'type'=> 'PROVINCIA'],
                    ['code'=>'16','descrption'=>'Zambezia', 'type'=> 'PROVINCIA'],
                    ['code'=>'17','descrption'=>'Nampula', 'type'=> 'PROVINCIA'],
                    ['code'=>'18','descrption'=>'Niassa', 'type'=> 'PROVINCIA'],
                    ['code'=>'19','descrption'=>'Cabo Delgado', 'type'=> 'PROVINCIA'],
                    ['code'=>'20','descrption'=>'Profissional de Saúde', 'type'=> 'ENQUADRAMENTO'],
                    ['code'=>'21','descrption'=>'Parceiros', 'type'=> 'ENQUADRAMENTO'],
                    ['code'=>'22','descrption'=>'Docentes', 'type'=> 'ENQUADRAMENTO'],
                    ['code'=>'23','descrption'=>'Estudantes', 'type'=> 'ENQUADRAMENTO'],
                    
                ];
    use HasFactory;
    public function categories()
    {
        return $this->hasMany(ProfessionalCategory::class,'area_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class,'program_id');
    }
}
