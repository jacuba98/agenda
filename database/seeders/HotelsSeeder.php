<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['name' => 'AKUMAL'],
            ['name' => 'COBA'],
            ['name' => 'COMING2'],
            ['name' => 'R&G'],
            ['name' => 'SCUBAQUATIC'],
            ['name' => 'SERVICIOS COMUNES'],
            ['name' => 'SIAN KA´AN'],
            ['name' => 'TRAINCAR'],
            ['name' => 'TULUM'],
        ];

        // Agregar los datos a la tabla "hoteles"
        DB::table('hotels')->insert($datos);
    }
}
