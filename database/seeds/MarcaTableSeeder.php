<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrs = [
        	['nombre' => 'ARESLINE'],
        	['nombre' => 'QUADRIFOGLIO'],
        	['nombre' => 'VISSO'],
        ];

        foreach ($arrs as $key) {
        	Marca::create($key);
        }
    }
}
