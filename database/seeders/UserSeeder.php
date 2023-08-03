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
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@telessaude.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
