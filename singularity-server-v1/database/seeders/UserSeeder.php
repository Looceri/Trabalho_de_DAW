<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com', // Altere para o e-mail desejado
            'url_alvara' => 'https://example.com/alvara', // Altere para o URL desejado
            'status' => -1, // Status do usuário admin
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Altere para a senha desejada
            'remember_token' => Str::random(10),
        ]);
    }
}
