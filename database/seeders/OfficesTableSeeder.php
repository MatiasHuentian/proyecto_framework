<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('offices')->insert(
            [
                'id' => 1,
                'nom_sucursal' => 'Oficina 1'
            ]
        );
        DB::table('offices')->insert(
            [
                'id' => 2,
                'nom_sucursal' => 'Oficina 2'
            ]
        );
        DB::table('offices')->insert(
            [
                'id' => 3,
                'nom_sucursal' => 'Oficina 3'
            ]
        );
    }
}
