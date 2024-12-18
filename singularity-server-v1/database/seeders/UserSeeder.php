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
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com', // Altere para o e-mail desejado
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // Altere para a senha desejada
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Employer User',
                'email' => 'employer@example.com', // Altere para o e-mail desejado
                'role' => 'employer',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // Altere para a senha desejada
                'remember_token' => Str::random(10),
            ]
        ]);

    }

}
