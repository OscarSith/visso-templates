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
        	['cat_id' => 7, 'pro_nombre' => 'Arko', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 7, 'pro_nombre' => 'Ducon', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Escritorios Operativos
        	['cat_id' => 8, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 8, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Escritorios ALTA DIRECCION
        	['cat_id' => 9, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 9, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Escritorios BENCH
        	['cat_id' => 10, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 10, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'ducon.jpg'],

        	// Silla Gerenciales
        	['cat_id' => 11, 'pro_nombre' => 'Arko', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 11, 'pro_nombre' => 'Ducon', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],

        	// Silla Operativos
        	['cat_id' => 12, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 12, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],



        	// Silla ALTA DIRECCION
        	['cat_id' => 13, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 13, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],

        	// Silla BENCH
        	['cat_id' => 14, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_alta_direccion.jpg'],
        	['cat_id' => 14, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'silla_operativos.jpg'],

        	// MESAS
        	['cat_id' => 15, 'pro_nombre' => 'Huawei', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_impulsa.jpg'],
        	['cat_id' => 15, 'pro_nombre' => 'Eisa', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],



        	// Escritorios Operativos
        	['cat_id' => 16, 'pro_nombre' => 'BVL', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_impulsa.jpg'],
        	['cat_id' => 16, 'pro_nombre' => 'Stevia One', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],

        	// Escritorios ALTA DIRECCION
        	['cat_id' => 17, 'pro_nombre' => 'Inmarsa', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_impulsa.jpg'],
        	['cat_id' => 17, 'pro_nombre' => 'Allemant Abogados', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],

        	// Escritorios BENCH
        	['cat_id' => 18, 'pro_nombre' => 'APM 2014', 'pro_descripcion' => '', 'pro_imagen_default' => 'escr_alta_direccion.jpg'],
        	['cat_id' => 18, 'pro_nombre' => 'Accordo', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inspira.jpg'],



        	// Silla Gerenciales
        	['cat_id' => 19, 'pro_nombre' => 'Nipro', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 19, 'pro_nombre' => 'Ducon', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],

        	// Silla Operativos
        	['cat_id' => 20, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 20, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],

        	// Silla ALTA DIRECCION
        	['cat_id' => 21, 'pro_nombre' => 'Accordo enchapada de madera', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 21, 'pro_nombre' => 'Portico', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],

        	// Silla
        	['cat_id' => 22, 'pro_nombre' => 'Miski', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_inizio.jpg'],
        	['cat_id' => 22, 'pro_nombre' => 'Accordo en poliuretano', 'pro_descripcion' => '', 'pro_imagen_default' => 'mesas_operativas.jpg'],

        	// Almacenaje Armario
        	['cat_id' => 23, 'pro_nombre' => 'Ceo', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
        	['cat_id' => 23, 'pro_nombre' => 'Duna', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

        	// Almacenaje Cajorenas
        	['cat_id' => 24, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
        	['cat_id' => 24, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

            ['cat_id' => 25, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
            ['cat_id' => 25, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

            ['cat_id' => 26, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
            ['cat_id' => 26, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],



        	// SILLONERA ERGONOMICA
        	['cat_id' => 27, 'pro_nombre' => 'Piso a techo', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_credenzas.jpg'],
        	['cat_id' => 27, 'pro_nombre' => 'Puertas Corredizas', 'pro_descripcion' => '', 'pro_imagen_default' => 'almacenaje.jpg'],

            // Recepcion
            ['cat_id' => 28, 'pro_nombre' => 'Ceo', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
            ['cat_id' => 28, 'pro_nombre' => 'Duna', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

            // Recepcion
            ['cat_id' => 29, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
            ['cat_id' => 29, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],



            // SISTEMAS MODULARES
            ['cat_id' => 30, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
            ['cat_id' => 30, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

            ['cat_id' => 31, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
            ['cat_id' => 31, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],



                // ALMACENAMIENTO -> 3 SUB MAS
                ['cat_id' => 32, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
                ['cat_id' => 32, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

                ['cat_id' => 33, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
                ['cat_id' => 33, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],


                ['cat_id' => 34, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
                ['cat_id' => 34, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

                ['cat_id' => 35, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
                ['cat_id' => 35, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

                ['cat_id' => 36, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
                ['cat_id' => 36, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],

                ['cat_id' => 37, 'pro_nombre' => 'Mito', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_armarios.jpg'],
                ['cat_id' => 37, 'pro_nombre' => 'Modular alto', 'pro_descripcion' => '', 'pro_imagen_default' => 'alma_cajorenas.jpg'],



            // ARESLINE - AMADEUS
            ['cat_id' => 44, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-amadeus-01.jpg'],
            ['cat_id' => 44, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-amadeus-02.jpg'],
            ['cat_id' => 44, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-amadeus-03.jpg'],
            ['cat_id' => 44, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-amadeus-04.jpg'],
            ['cat_id' => 44, 'pro_nombre' => 'Sillas Ergonomica', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-amadeus-05.jpg'],


            // ARESLINE - LINK-XPLUS
            ['cat_id' => 45, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xplus-01.jpg'],
            ['cat_id' => 45, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xplus-02.jpg'],
            ['cat_id' => 45, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xplus-03.jpg'],
            ['cat_id' => 45, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xplus-04.jpg'],


            // ARESLINE - PARLAMENT
            ['cat_id' => 46, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-parlament-01.jpg'],
            ['cat_id' => 46, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-parlament-02.jpg'],
            ['cat_id' => 46, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-parlament-03.jpg'],
            ['cat_id' => 46, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-parlament-04.jpg'],

            // ARESLINE - PF3
            ['cat_id' => 47, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-pf3-01.jpg'],
            ['cat_id' => 47, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-pf3-02.jpg'],
            ['cat_id' => 47, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-pf3-03.jpg'],
            ['cat_id' => 47, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-pf3-04.jpg'],
            ['cat_id' => 47, 'pro_nombre' => 'Sillas Ergonomica', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-pf3-05.jpg'],

            // ARESLINE - TRENDY
            ['cat_id' => 48, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-trendy-01.jpg'],
            ['cat_id' => 48, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-trendy-02.jpg'],
            ['cat_id' => 48, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-trendy-03.jpg'],
            ['cat_id' => 48, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-trendy-04.jpg'],

            // ARESLINE - XTEN
            ['cat_id' => 49, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xten-01.jpg'],
            ['cat_id' => 49, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xten-02.jpg'],
            ['cat_id' => 49, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xten-03.jpg'],
            ['cat_id' => 49, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-xten-04.jpg'],


            // CUADRIFOGLIO - MOBILIARIO
            ['cat_id' => 50, 'pro_nombre' => 'BOISERIE', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-mobiliario-boilere.jpg'],
            ['cat_id' => 50, 'pro_nombre' => 'DIRECCIONALES', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-mobiliario-direccionales.jpg'],
            ['cat_id' => 50, 'pro_nombre' => 'MOSTRADORES', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-mobiliario-mostradores.jpg'],
            ['cat_id' => 50, 'pro_nombre' => 'OPERATIVOS', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-mobiliario-operativos.jpg'],
            ['cat_id' => 50, 'pro_nombre' => 'REUNION', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-mobiliario-reunion.jpg'],
            ['cat_id' => 50, 'pro_nombre' => 'SIT STAND', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-mobiliario-sit-stand.jpg'],
            ['cat_id' => 50, 'pro_nombre' => 'X8', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-mobiliario-x8.jpg'],


            // QUADRIFOGLIO - SILLAS
            ['cat_id' => 51, 'pro_nombre' => 'DIRECCIONALES', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-sillas-direccionales.jpg'],
            ['cat_id' => 51, 'pro_nombre' => 'OPERATIVOS', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-sillas-operativos.jpg'],
            ['cat_id' => 51, 'pro_nombre' => 'REUNIÓN', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-sillas-reunion.jpg'],
            ['cat_id' => 51, 'pro_nombre' => 'SILLONES DE ESPERA', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'quadri-sillas-sillones-espera.jpg'],
        ];

        foreach ($productos as $key => $value) {
        	Producto::create($value);
        }
    }
}
