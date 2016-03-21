<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
        	// Escritorios Gerenciales
        	['cat_id' => 9, 'pro_nombre' => 'Arko', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 9, 'pro_nombre' => 'Ducon', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Escritorios Operativos
        	['cat_id' => 10, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 10, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Escritorios ALTA DIRECCION
        	['cat_id' => 11, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 11, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Escritorios BENCH
        	['cat_id' => 12, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 12, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Sillas
        	// Silla Gerenciales
        	['cat_id' => 13, 'pro_nombre' => 'Arko', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 13, 'pro_nombre' => 'Ducon', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],


        	// Silla Operativos
        	['cat_id' => 14, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 14, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],

        	// Silla ALTA DIRECCION
        	['cat_id' => 15, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 15, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],

        	// Silla BENCH
        	['cat_id' => 16, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 16, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],



        	// MESAS
        	['cat_id' => 17, 'pro_nombre' => 'Huawei', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_impulsa.jpg'],
        	['cat_id' => 17, 'pro_nombre' => 'Eisa', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],

        	// Escritorios Operativos
        	['cat_id' => 18, 'pro_nombre' => 'BVL', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_impulsa.jpg'],
        	['cat_id' => 18, 'pro_nombre' => 'Stevia One', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],

        	// Escritorios ALTA DIRECCION
        	['cat_id' => 19, 'pro_nombre' => 'Inmarsa', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_impulsa.jpg'],
        	['cat_id' => 19, 'pro_nombre' => 'Allemant Abogados', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],

        	// Escritorios BENCH
        	['cat_id' => 20, 'pro_nombre' => 'APM 2014', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 20, 'pro_nombre' => 'Accordo', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],

        	// Silla Gerenciales
        	['cat_id' => 21, 'pro_nombre' => 'Nipro', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 21, 'pro_nombre' => 'Ducon', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],

        	// Silla Operativos
        	['cat_id' => 22, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 22, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],

        	// Silla ALTA DIRECCION
        	['cat_id' => 23, 'pro_nombre' => 'Accordo enchapada de madera', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 23, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],

        	// Silla
        	['cat_id' => 24, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 24, 'pro_nombre' => 'Accordo en poliuretano', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],


        	// Almacenaje Armario
        	['cat_id' => 25, 'pro_nombre' => 'Ceo', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
        	['cat_id' => 25, 'pro_nombre' => 'Duna', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

        	// Almacenaje Cajorenas
        	['cat_id' => 26, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
        	['cat_id' => 26, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

        	// Almacenaje Credenciales
        	['cat_id' => 27, 'pro_nombre' => 'Piso a techo', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_credenzas.jpg'],
        	['cat_id' => 27, 'pro_nombre' => 'Puertas Corredizas', 'pro_descripcion' => '', 'pro_imagen_default' => 'almacenaje.jpg'],


        	// Recepcion
        	['cat_id' => 29, 'pro_nombre' => 'Ceo', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
        	['cat_id' => 29, 'pro_nombre' => 'Duna', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

        	// Recepcion
        	['cat_id' => 30, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
        	['cat_id' => 30, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

        	// Recepcion
        	['cat_id' => 31, 'pro_nombre' => 'Piso a techo', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_credenzas.jpg'],
        	['cat_id' => 31, 'pro_nombre' => 'Puertas Corredizas', 'pro_descripcion' => '', 'pro_imagen_default' => 'almacenaje.jpg'],
        ];

        foreach ($productos as $key => $value) {
        	Producto::create($value);
        }
    }
}
