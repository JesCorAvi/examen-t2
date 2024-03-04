<?php

namespace Database\Seeders;

use App\Models\Elemplo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElemploSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #Usando la factoria
        #Count numero que quieres crear.
        Elemplo::factory()->count(10)->create();

        /*$asignaturas = [
            ['denominacion' => 'Matemáticas', 'numero_de_trimestres' => 3],
            ['denominacion' => 'Física', 'numero_de_trimestres' => 2],
            ['denominacion' => 'Historia', 'numero_de_trimestres' => 3],
            // Agrega más asignaturas si es necesario
        ];

        foreach ($asignaturas as $asignaturaData) {
            Asignatura::create($asignaturaData); MANUAL
        }*/
    }
}
