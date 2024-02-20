<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colecciones')->insert([
            [
                'nombre' => 'Dreams & Nightmares',
            ],
            [
                'nombre' => 'Kilowatt',
            ],
            [
                'nombre' => 'Revolution',
            ],
            [
                'nombre' => '2021 Mirage',
            ],
        ]);


        DB::table('skins')->insert([
            [
                'nombre' => 'Zeus x27 Olympus',
                'coleccion_id' => 2,
                'float' => 0.0234,
                'desgaste' => 'Recién fabricado',
                'precio_recomendado' => 50,
            ],
            [
                'nombre' => 'M4A4 Temukau',
                'coleccion_id' => 3,
                'float' => 0.3417,
                'desgaste' => 'Algo desgastado',
                'precio_recomendado' => 30,
            ],
            [
                'nombre' => 'AK-47 Nightwish',
                'coleccion_id' => 1,
                'float' => 0.0743,
                'desgaste' => 'Casi nuevo',
                'precio_recomendado' => 24.12,
            ],
            [
                'nombre' => 'AWP Desert Hydra',
                'coleccion_id' => 4,
                'float' => 0.693,
                'desgaste' => 'Deplorable',
                'precio_recomendado' => 1655.59,
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin',
                'email_verified_at' => null,
                'password' => '$2y$12$oUpIlAJ6KgdcO3RpR6yTkePAz97Fi0957HkxFmTv.2yRAxs8kM0HS',
                'remember_token' => null,
                'created_at' => '2024-02-20 08:29:17',
                'updated_at' => '2024-02-20 08:29:17',
            ]
        ]);
    }



}

