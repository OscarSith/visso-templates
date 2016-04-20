<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            // VISSO
        	['marca_id' => 3, 'cat_nombre' => 'ACCESORIOS', 'cat_imagen' => 'visso-accesorios.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 3, 'cat_nombre' => 'ALMACENAMIENTO', 'cat_imagen' => 'visso-almacenamiento.jpg', 'cat_sub' => 1, 'cat_parent' => 2],
            ['marca_id' => 3, 'cat_nombre' => 'ESCRITORIOS', 'cat_imagen' => 'visso-escritorio.jpg', 'cat_sub' => 1, 'cat_parent' => 3],
            ['marca_id' => 3, 'cat_nombre' => 'MESA DE REUNION', 'cat_imagen' => 'visso-mesa-reunion.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 3, 'cat_nombre' => 'SILLONERÍA ERGONÓMICA', 'cat_imagen' => 'visso-sillonera-ergonomica.jpg', 'cat_sub' => 1, 'cat_parent' => 4],
            ['marca_id' => 3, 'cat_nombre' => 'SISTEMAS MODULARES', 'cat_imagen' => 'visso-sistemas-modulares.jpg', 'cat_sub' => 1, 'cat_parent' => 0],

                // ALMACENAMIENTO -> 13
                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'visso-almacenamiento-armario.jpg', 'cat_sub' => 2, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'visso-almacenamiento-cajonera.jpg', 'cat_sub' => 2, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CREDENZAS', 'cat_imagen' => 'visso-almacenamiento-credenzas.jpg', 'cat_sub' => 2, 'cat_parent' => 0],
                // -> 15

        	// ESCRITORIOS -> 16
        	['marca_id' => 3, 'cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'visso-escritorio-gerenciales.jpg', 'cat_sub' => 3, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'visso-escritorio-operativos.jpg', 'cat_sub' => 3, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'PRESIDENCIALES', 'cat_imagen' => 'visso-escritorio-presidenciales.jpg', 'cat_sub' => 3, 'cat_parent' => 0],
            // -> 18

        	// SILLONERA ERGONOMICA -> 27
        	['marca_id' => 3, 'cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'visso-sillonera-ergonomica-gerenciales.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'visso-sillonera-ergonomica-operativos.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'VISITA', 'cat_imagen' => 'visso-sillonera-ergonomica-visita.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
            // -> 29


            // ARESLINE
            ['marca_id' => 1, 'cat_nombre' => 'AMADEUS', 'cat_imagen' => 'aresline-amadeus.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 1, 'cat_nombre' => 'LINK XPLUS', 'cat_imagen' => 'aresline-link-axus.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 1, 'cat_nombre' => 'PARLAMENT', 'cat_imagen' => 'aresline-parlament.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 1, 'cat_nombre' => 'PF3', 'cat_imagen' => 'aresline-pf3.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 1, 'cat_nombre' => 'TRENDY FIRST CLASS', 'cat_imagen' => 'aresline-trendy-fc.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 1, 'cat_nombre' => 'XTEN', 'cat_imagen' => 'aresline-xten.jpg', 'cat_sub' => 1, 'cat_parent' => 0],


            // QUADRIFOGLIO
            ['marca_id' => 2, 'cat_nombre' => 'MOBILIARIO', 'cat_imagen' => 'quadri-mobiliario.jpg', 'cat_sub' => 1, 'cat_parent' => 0],
            ['marca_id' => 2, 'cat_nombre' => 'SILLAS', 'cat_imagen' => 'quadri-sillas.jpg', 'cat_sub' => 1, 'cat_parent' => 0],

        ];

        foreach ($categorias as $key => $value) {
        	Categoria::create($value);
        }
    }
}
