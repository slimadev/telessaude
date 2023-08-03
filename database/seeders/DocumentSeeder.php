<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Document;
use App\Models\SimpleEntity;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documents = Document::DATA;
        error_log('Carregando documentos .....');

        foreach ($documents as &$document) {
            //print_r($document['key']);
            //print_r($document['values']);
            error_log('Criando  '.$document['key']['descrption']);
            DB::beginTransaction();
            try {
                $parent = SimpleEntity::create($document['key']);
                $parent->documents()->createMany($document['values']);
                DB::commit();
                error_log('Sucesso ao criar  '.$document['key']['descrption']);
            } catch (\Exception $e) {
                DB::rollback();
                error_log('Caiu no erro criando  '.$document['key']['descrption']);
                // something went wrong
            }
        }
    }
}
