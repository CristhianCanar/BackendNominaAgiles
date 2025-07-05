<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombres' => 'John',
            'apellidos' => 'Doe',
            'salario_base' => 100000,
            'fecha_salida' => null,
            'fecha_ingreso' => now(),
            'tipo_contrato' => 'Full-time',
            'email' => 'prueba@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'nombres' => 'Carlos',
            'apellidos' => 'Castillo',
            'salario_base' => 200000,
            'fecha_salida' => null,
            'fecha_ingreso' => now(),
            'tipo_contrato' => 'Full-time',
            'email' => 'prueba2@gmail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
