<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TuberculoseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('simple_entities')->insert([
            'descrption' => 'Tuberculose',
            'type' => 'PROGRAMA',
            'code' => '62',
        ]);
        error_log('Programa Tuberculose criado.....');
    }
}
