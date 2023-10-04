<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SimpleEntity;
use App\Models\ProfessionalCategory;
use Illuminate\Support\Facades\DB;

class SimpleEntitySeeder extends Seeder
{   
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {   
        $pro_categories = ProfessionalCategory::DATA;
        error_log('Carregando dados genericos .....');
        DB::table('simple_entities')->insert(SimpleEntity::DATA);


        foreach ($pro_categories as &$pro_category) {
            //print_r($pro_category['key']);
            //print_r($pro_category['values']);
            error_log('Criando  '.$pro_category['key']['descrption']);
            DB::beginTransaction();
            try {
                $parent = SimpleEntity::create($pro_category['key']);
                $parent->categories()->createMany($pro_category['values']);
                DB::commit();
                error_log('Sucesso ao criar  '.$pro_category['key']['descrption']);
            } catch (\Exception $e) {
                DB::rollback();
                error_log('Caiu no erro criando  '.$pro_category['key']['descrption']);
                // something went wrong
            }
        }

        

    }
}
