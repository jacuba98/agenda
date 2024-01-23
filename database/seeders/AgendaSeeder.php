<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'name' => 'IGNACIO SUBIAS',
                'job' => 'COUNTRY MANAGER MEXICO',
                'departament' => 'DIRECCION GENERAL',
                'hotel' => '',
                'extension' => '',
                'email' => ''
            ],
            [
                'name' => 'IGNACIO SUBIAS',
                'job' => '',
                'departament' => '',
                'hotel' => '',
                'extension' => '',
                'email' => ''
            ],
        ];

        // Agregar los datos a la tabla "hoteles"
        DB::table('agendas')->insert($datos);
    }
}
