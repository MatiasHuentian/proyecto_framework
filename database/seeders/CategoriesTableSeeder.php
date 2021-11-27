<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'id' => 1,
                'nom_categoria' => 'Categoria 1'
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 2,
                'nom_categoria' => 'Categoria 2'
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 3,
                'nom_categoria' => 'Categoria 3'
            ]
        );
    }
}
