<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        error_log('Rodando a criacao de utilizador.....');
        $province_id = DB::table('simple_entities')->where('code', '10')->value('id');
        $framing_id = DB::table('simple_entities')->where('code', '20')->value('id');
        DB::table('users')->insert([
            'name' => 'Super User',
            'is_admin' => 1,
            'is_male' => 1,
            'province_id'=>$province_id,
            'framing_id'=>$framing_id,
            'email' => 'su@telessaude.com',
            'password' => Hash::make('admin'),
        ]);
        error_log('Utilizador criado.....');
    }
}
