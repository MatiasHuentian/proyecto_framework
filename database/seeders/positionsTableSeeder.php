<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class positionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert(
            [
                'id' => 1,
                'nom_cargos' => 'Gerente'
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => 2,
                'nom_cargos' => 'Cajero'
            ]
        );
        DB::table('positions')->insert(
            [
                'id' => 3,
                'nom_cargos' => 'Bodeguero'
            ]
        );
    }
}
