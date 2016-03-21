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
        	['cat_nombre' => 'ESCRITORIOS', 'cat_imagen' => 'escritorio.jpg', 'cat_sub' => 1, 'cat_parent' => 2],
        	['cat_nombre' => 'SILLAS', 'cat_imagen' => 'sillas.jpg', 'cat_sub' => 1, 'cat_parent' => 3],
        	['cat_nombre' => 'MESAS', 'cat_imagen' => 'mesa.jpg', 'cat_sub' => 1, 'cat_parent' => 4],
        	['cat_nombre' => 'ALMACENAJE', 'cat_imagen' => 'almacenaje.jpg', 'cat_sub' => 1, 'cat_parent' => 5],
        	['cat_nombre' => 'PANELES', 'cat_imagen' => 'paneles.jpg', 'cat_sub' => 1, 'cat_parent' => 6],
        	['cat_nombre' => 'RECEPCION', 'cat_imagen' => 'recepcion.jpg', 'cat_sub' => 1, 'cat_parent' => 7],
        	['cat_nombre' => 'ACCESORIOS', 'cat_imagen' => 'accesorios.jpg', 'cat_sub' => 1, 'cat_parent' => 8],
        	['cat_nombre' => 'OTROS', 'cat_imagen' => 'otros.jpg', 'cat_sub' => 1, 'cat_parent' => 9],

        	// ESCRITORIOS
        	['cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'escr_gerenciales.jpg', 'cat_sub' => 2, 'cat_parent' => 0],
        	['cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'escr_operativos.jpg', 'cat_sub' => 2, 'cat_parent' => 0],
        	['cat_nombre' => 'ALTA DIRECCION', 'cat_imagen' => 'escr_alta_direccion.jpg', 'cat_sub' => 2, 'cat_parent' => 4],
        	['cat_nombre' => 'BENCH', 'cat_imagen' => 'escr_bench.jpg', 'cat_sub' => 2, 'cat_parent' => 5],

        	// SILLAS
        	['cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'silla_gerenciales.jpg', 'cat_sub' => 3, 'cat_parent' => 0],
        	['cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'silla_operativos.jpg', 'cat_sub' => 3, 'cat_parent' => 0],
        	['cat_nombre' => 'ALTA DIRECCIÓN', 'cat_imagen' => 'silla_alta_direccion.jpg', 'cat_sub' => 3, 'cat_parent' => 0],
        	['cat_nombre' => 'VISITA', 'cat_imagen' => 'silla_bench.jpg', 'cat_sub' => 3, 'cat_parent' => 0],

        	// MESAS
        	['cat_nombre' => 'ACCORDO', 'cat_imagen' => 'mesas_accordo.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['cat_nombre' => 'ACTIVA', 'cat_imagen' => 'mesas_activa.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['cat_nombre' => 'AVANTI', 'cat_imagen' => 'mesas_avanti.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['cat_nombre' => 'CIRCULARES', 'cat_imagen' => 'mesas_circulares.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['cat_nombre' => 'IMPULSA', 'cat_imagen' => 'mesas_impulsa.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['cat_nombre' => 'INIZIO', 'cat_imagen' => 'mesas_inizio.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['cat_nombre' => 'INSPIRA', 'cat_imagen' => 'mesas_inspira.jpg', 'cat_sub' => 4, 'cat_parent' => 0],
        	['cat_nombre' => 'OPERATIVAS', 'cat_imagen' => 'mesas_operativas.jpg', 'cat_sub' => 4, 'cat_parent' => 0],

        	// ALMACENAMIENTO
        	['cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'alma_armarios.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
        	['cat_nombre' => 'CAJORENAS', 'cat_imagen' => 'alma_cajorenas.jpg', 'cat_sub' => 5, 'cat_parent' => 0],
        	['cat_nombre' => 'CREDENZAS', 'cat_imagen' => 'alma_credenzas.jpg', 'cat_sub' => 5, 'cat_parent' => 0],

        	// PANELES
        	['cat_nombre' => 'PANELES', 'cat_imagen' => 'paneles_paneles.jpg', 'cat_sub' => 6, 'cat_parent' => 0],

        	// RECEPCION
        	['cat_nombre' => 'COUNTERS', 'cat_imagen' => 'recep_counters.jpg', 'cat_sub' => 7, 'cat_parent' => 0],
        	['cat_nombre' => 'MESAS DE RECEPCIÓN', 'cat_imagen' => 'recep_mesas_recepcion.jpg', 'cat_sub' => 7, 'cat_parent' => 0],
        	['cat_nombre' => 'MUEBLES DE RECEPCIÓN', 'cat_imagen' => 'recep_muebles_recepcion.jpg', 'cat_sub' => 7, 'cat_parent' => 0],

        	// ACCESORIOS
        	['cat_nombre' => 'PORTA MONITORES', 'cat_imagen' => 'acce_porta_monitores.jpg', 'cat_sub' => 8, 'cat_parent' => 0],

        	// OTROS
        	['cat_nombre' => 'OTROS', 'cat_imagen' => 'otros_otros.jpg', 'cat_sub' => 9, 'cat_parent' => 0],
        ];

        foreach ($categorias as $key => $value) {
        	Categoria::create($value);
        }
    }
}
