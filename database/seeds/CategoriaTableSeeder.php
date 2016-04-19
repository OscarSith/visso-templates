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
        	['marca_id' => 3, 'cat_nombre' => 'ACCESORIOS', 'cat_imagen' => 'visso-accesorios.jpg', 'cat_sub' => 1, 'cat_parent' => 2],
            ['marca_id' => 3, 'cat_nombre' => 'ALMACENAMIENTO', 'cat_imagen' => 'visso-almacenamiento.jpg', 'cat_sub' => 1, 'cat_parent' => 3],
            ['marca_id' => 3, 'cat_nombre' => 'ESCRITORIOS', 'cat_imagen' => 'visso-escritorio.jpg', 'cat_sub' => 1, 'cat_parent' => 4],
            ['marca_id' => 3, 'cat_nombre' => 'MESA DE REUNION', 'cat_imagen' => 'visso-mesa-reunion.jpg', 'cat_sub' => 1, 'cat_parent' => 5],
            ['marca_id' => 3, 'cat_nombre' => 'SILLONERÍA ERGONÓMICA', 'cat_imagen' => 'visso-sillonera-ergonomica.jpg', 'cat_sub' => 1, 'cat_parent' => 6],
            ['marca_id' => 3, 'cat_nombre' => 'SISTEMAS MODULARES', 'cat_imagen' => 'visso-sistemas-modulares.jpg', 'cat_sub' => 1, 'cat_parent' => 7],


            // ACCESORIOS -> 7
            ['marca_id' => 3, 'cat_nombre' => 'ACCESORIOS PARA VALLAS', 'cat_imagen' => 'acce_porta_monitores.jpg', 'cat_sub' => 2, 'cat_parent' => 8],
            ['marca_id' => 3, 'cat_nombre' => 'APOYA PIES', 'cat_imagen' => 'mesas_operativas.jpg', 'cat_sub' => 2, 'cat_parent' => 8],
            ['marca_id' => 3, 'cat_nombre' => 'PORTA CPUS', 'cat_imagen' => 'mesas_inspira.jpg', 'cat_sub' => 2, 'cat_parent' => 8],
            ['marca_id' => 3, 'cat_nombre' => 'PORTA MONITORES', 'cat_imagen' => 'mesas_operativas.jpg', 'cat_sub' => 2, 'cat_parent' => 8],
            ['marca_id' => 3, 'cat_nombre' => 'VALLAS 3 EN 1', 'cat_imagen' => 'mesas_inizio.jpg', 'cat_sub' => 2, 'cat_parent' => 8],
            ['marca_id' => 3, 'cat_nombre' => 'LUMINARIAS', 'cat_imagen' => 'mesas_operativas.jpg', 'cat_sub' => 2, 'cat_parent' => 8],
            // -> 12

            // ALMACENAMIENTO -> 13
            ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'alma_armarios.jpg', 'cat_sub' => 3, 'cat_parent' => 32],
            ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'alma_cajorenas.jpg', 'cat_sub' => 3, 'cat_parent' => 33],
            ['marca_id' => 3, 'cat_nombre' => 'CREDENZAS', 'cat_imagen' => 'alma_credenzas.jpg', 'cat_sub' => 3, 'cat_parent' => 34],
            // -> 15

        	// ESCRITORIOS -> 16
        	['marca_id' => 3, 'cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'escr_gerenciales.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'escr_operativos.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'ALTA DIRECCION', 'cat_imagen' => 'escr_alta_direccion.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
            // -> 18

        	// MESA DE REUNION -> 19
        	['marca_id' => 3, 'cat_nombre' => 'ACCORD', 'cat_imagen' => 'silla_gerenciales.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'ACTIVA', 'cat_imagen' => 'silla_operativos.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'AVANTI', 'cat_imagen' => 'silla_alta_direccion.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'CIRCULAR', 'cat_imagen' => 'silla_bench.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
            ['marca_id' => 3, 'cat_nombre' => 'INIZIO', 'cat_imagen' => 'silla_gerenciales.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
            ['marca_id' => 3, 'cat_nombre' => 'OVALADAS', 'cat_imagen' => 'silla_operativos.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
            ['marca_id' => 3, 'cat_nombre' => 'REBATIBLES', 'cat_imagen' => 'silla_alta_direccion.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
            ['marca_id' => 3, 'cat_nombre' => 'IMPULSA', 'cat_imagen' => 'silla_bench.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
            // -> 26

        	// SILLONERA ERGONOMICA -> 27
        	['marca_id' => 3, 'cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'mesas_accordo.jpg', 'cat_sub' => 6, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'mesas_activa.jpg', 'cat_sub' => 6, 'cat_parent' => 0],
        	['marca_id' => 3, 'cat_nombre' => 'VISITA', 'cat_imagen' => 'mesas_avanti.jpg', 'cat_sub' => 6, 'cat_parent' => 0],
            // -> 29

        	// SISTEMAS MODULARES -> 30
        	['marca_id' => 3, 'cat_nombre' => 'SISTEMA DE PANELES', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 7, 'cat_parent' => 0],
            ['marca_id' => 3, 'cat_nombre' => 'SISTEMAS BENCH', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 7, 'cat_parent' => 0],
            // -> 31


                // ALMACENAMIENTO -> 3 SUB MAS
                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 32, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 32, 'cat_parent' => 0],

                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 33, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 33, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 33, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 33, 'cat_parent' => 0],

                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 34, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 34, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 34, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 34, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 34, 'cat_parent' => 0],
                ['marca_id' => 3, 'cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 34, 'cat_parent' => 0],


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
