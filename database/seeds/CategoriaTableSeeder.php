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
        	['marca_id' => 3, 'cat_nombre' => 'ACCESORIOS', 'cat_imagen' => 'visso-accesorios.jpg', 'cat_sub' => 1, 'cat_parent' => 2, 'cat_detalle' => 0, 'cat_sub_nivel' => 1],
                ['marca_id' => 3, 'cat_nombre' => 'ACCESORIOS PARA VALLAS', 'cat_imagen' => 'visso-accesorios-para-vallas.jpg', 'cat_sub' => 2, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 1],
                ['marca_id' => 3, 'cat_nombre' => 'APOYA PIES', 'cat_imagen' => 'visso-accesorios-apoya-pies.jpg', 'cat_sub' => 2, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 2],
                ['marca_id' => 3, 'cat_nombre' => 'PORTA CPUS', 'cat_imagen' => 'visso-accesorios-porta-cpu.jpg', 'cat_sub' => 2, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 3],
                ['marca_id' => 3, 'cat_nombre' => 'PORTA MONITORES', 'cat_imagen' => 'visso-accesorios-porta-monitores.jpg', 'cat_sub' => 2, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 4],
                ['marca_id' => 3, 'cat_nombre' => 'VALLAS 3 EN 1', 'cat_imagen' => 'visso-accesorios-valla-3-en-1.jpg', 'cat_sub' => 2, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 5],

            ['marca_id' => 3, 'cat_nombre' => 'ALMACENAMIENTO', 'cat_imagen' => 'visso-almacenamiento.jpg', 'cat_sub' => 1, 'cat_parent' => 3, 'cat_detalle' => 0, 'cat_sub_nivel' => 1],
                ['marca_id' => 3, 'cat_nombre' => 'ARCHIVOS MOVILES', 'cat_imagen' => 'visso-almacenamiento-cajoneras-movil.jpg', 'cat_sub' => 3, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 6],

                ['marca_id' => 3, 'cat_nombre' => 'ARMARIOS', 'cat_imagen' => 'visso-almacenamiento-armario-operativos.jpg', 'cat_sub' => 3, 'cat_parent' => 4, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'visso-almacenamiento-armario-gerenciales-ceo.jpg', 'cat_sub' => 4,  'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 7],
                    ['marca_id' => 3, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'visso-almacenamiento-armario-operativos-Armario-Mixto.jpg', 'cat_sub' => 4, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 8],

                ['marca_id' => 3, 'cat_nombre' => 'ARCHIVOS', 'cat_imagen' => 'visso-almacenamiento-cajoneras-archivos-verticales.jpg', 'cat_sub' => 3, 'cat_parent' => 5, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'CAJONERAS', 'cat_imagen' => 'visso-almacenamiento-archivos-cajoneras-cajoneras-fijas.jpg', 'cat_sub' => 5, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 9],
                    ['marca_id' => 3, 'cat_nombre' => 'CREDENZAS', 'cat_imagen' => 'visso-almacenamiento-archivos-credenzas-credenza-de-puertas-corredizas.jpg', 'cat_sub' => 5, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 10],

            ['marca_id' => 3, 'cat_nombre' => 'ESCRITORIOS', 'cat_imagen' => 'visso-escritorio.jpg', 'cat_sub' => 1, 'cat_parent' => 6, 'cat_detalle' => 0, 'cat_sub_nivel' => 1],
                ['marca_id' => 3, 'cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'visso-escritorio-gerenciales.jpg', 'cat_sub' => 6, 'cat_parent' => 7, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'ARKO', 'cat_imagen' => 'visso-escritorio-gerenciales-arko.jpg', 'cat_sub' => 7, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 11],
                    ['marca_id' => 3, 'cat_nombre' => 'DELTA', 'cat_imagen' => 'visso-escritorio-gerenciales-delta.jpg', 'cat_sub' => 7, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 12],
                    ['marca_id' => 3, 'cat_nombre' => 'QUADRA GERENCIAL', 'cat_imagen' => 'visso-escritorio-gerenciales-quadragerencial.jpg', 'cat_sub' => 7, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 13],
                    ['marca_id' => 3, 'cat_nombre' => 'TARGA', 'cat_imagen' => 'visso-escritorio-gerenciales-targa.jpg', 'cat_sub' => 7, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 14],

                ['marca_id' => 3, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'visso-escritorio-operativos.jpg', 'cat_sub' => 6, 'cat_detalle' => 0, 'cat_parent' => 8, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'SERVA', 'cat_imagen' => 'visso-escritorio-operativos-linea-serva.jpg', 'cat_sub' => 8, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 15],
                    ['marca_id' => 3, 'cat_nombre' => 'LINEA ABACO', 'cat_imagen' => 'visso-escritorio-operativos-linea-abaco.jpg', 'cat_sub' => 8, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 16],
                    ['marca_id' => 3, 'cat_nombre' => 'LINEA ASTER', 'cat_imagen' => 'visso-escritorio-operativos-linea-aster.jpg', 'cat_sub' => 8, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 17],
                    ['marca_id' => 3, 'cat_nombre' => 'LINEA QUADRA', 'cat_imagen' => 'visso-escritorio-operativos-linea-quadra.jpg', 'cat_sub' => 8, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 18],
                    ['marca_id' => 3, 'cat_nombre' => 'MISKI', 'cat_imagen' => 'visso-escritorio-operativos-linea-miski.jpg', 'cat_sub' => 8, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 19],
                    ['marca_id' => 3, 'cat_nombre' => 'PORTICO', 'cat_imagen' => 'visso-escritorio-operativos-linea-portico.jpg', 'cat_sub' => 8, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 20],

                ['marca_id' => 3, 'cat_nombre' => 'PRESIDENCIALES', 'cat_imagen' => 'visso-escritorio-presidenciales.jpg', 'cat_sub' => 6, 'cat_parent' => 9, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'DUCON', 'cat_imagen' => 'visso-escritorio-presidenciales-ducon.jpg', 'cat_sub' => 9, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 21],

            ['marca_id' => 3, 'cat_nombre' => 'MESA DE REUNION', 'cat_imagen' => 'visso-mesa-reunion.jpg', 'cat_sub' => 1, 'cat_parent' => 10, 'cat_detalle' => 0, 'cat_sub_nivel' => 1],
                ['marca_id' => 3, 'cat_nombre' => 'ACCORDO', 'cat_imagen' => 'visso-messa-reunion-accord.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 22],
                ['marca_id' => 3, 'cat_nombre' => 'ACTIVA', 'cat_imagen' => 'visso-messa-reunion-activa.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 23],
                ['marca_id' => 3, 'cat_nombre' => 'AVANTI', 'cat_imagen' => 'visso-messa-reunion-avanti.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 24],
                ['marca_id' => 3, 'cat_nombre' => 'CIRCULAR', 'cat_imagen' => 'visso-messa-reunion-circular.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 25],
                ['marca_id' => 3, 'cat_nombre' => 'IMPULSA', 'cat_imagen' => 'visso-messa-reunion-impulsa.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 29],
                ['marca_id' => 3, 'cat_nombre' => 'INIZIO', 'cat_imagen' => 'visso-messa-reunion-inizio.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 26],
                ['marca_id' => 3, 'cat_nombre' => 'OVALADAS', 'cat_imagen' => 'visso-messa-reunion-ovaladas.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 27],
                ['marca_id' => 3, 'cat_nombre' => 'REBATIBLES', 'cat_imagen' => 'visso-messa-reunion-rebatible.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 28],

            ['marca_id' => 3, 'cat_nombre' => 'SILLONERÍA ERGONÓMICA', 'cat_imagen' => 'visso-sillonera-ergonomica.jpg', 'cat_sub' => 1, 'cat_parent' => 11, 'cat_detalle' => 0, 'cat_sub_nivel' => 1],
                ['marca_id' => 3, 'cat_nombre' => 'GERENCIALES', 'cat_imagen' => 'visso-sillonera-ergonomica-gerenciales.jpg', 'cat_sub' => 11, 'cat_parent' => 12, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'Consiglieri Alta', 'cat_imagen' => 'visso-silloneria-consiglierialta.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 31],
                    ['marca_id' => 3, 'cat_nombre' => 'Consiglieri Baja', 'cat_imagen' => 'visso-silloneria-consiglieribaja-baja.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 32],
                    ['marca_id' => 3, 'cat_nombre' => 'Consiglieri Trineo', 'cat_imagen' => 'visso-silloneria-consiglieri-trineo.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 34],
                    ['marca_id' => 3, 'cat_nombre' => 'Guru Alta', 'cat_imagen' => 'visso-silloneria-gurualta.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 33],
                    ['marca_id' => 3, 'cat_nombre' => 'Guru Baja', 'cat_imagen' => 'visso-silloneria-gurubaja.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 35],
                    ['marca_id' => 3, 'cat_nombre' => 'Guru Trineo', 'cat_imagen' => 'visso-silloneria-guru-trineo.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 36],
                    ['marca_id' => 3, 'cat_nombre' => 'Integra', 'cat_imagen' => 'visso-silloneria-integra.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 30],

                ['marca_id' => 3, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'visso-sillonera-ergonomica-operativos.jpg', 'cat_sub' => 11, 'cat_parent' => 13, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'Clio', 'cat_imagen' => 'visso-silloneria-operativos-clio.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 37],
                    ['marca_id' => 3, 'cat_nombre' => 'Clio Cajera', 'cat_imagen' => 'visso-silloneria-operativos-clio-cajera.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 38],
                    ['marca_id' => 3, 'cat_nombre' => 'Confort', 'cat_imagen' => 'visso-silloneria-operativos-confort.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 39],
                    ['marca_id' => 3, 'cat_nombre' => 'Confort base de aluminio', 'cat_imagen' => 'visso-silloneria-operativos-confort-b-aluminio.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 40],
                    ['marca_id' => 3, 'cat_nombre' => 'Guiatta', 'cat_imagen' => 'visso-silloneria-operativos-guatta.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 41],
                    ['marca_id' => 3, 'cat_nombre' => 'Guiatta con base de aluminio', 'cat_imagen' => 'visso-silloneria-operativos-guiatta-b-aluminio.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 42],
                    ['marca_id' => 3, 'cat_nombre' => 'Smart', 'cat_imagen' => 'visso-silloneria-operativos-smart.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 43],
                    ['marca_id' => 3, 'cat_nombre' => 'Smart con base de aluminio', 'cat_imagen' => 'visso-silloneria-operativos-smart-b-aluminio.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 44],
                    ['marca_id' => 3, 'cat_nombre' => 'Smart con base de aluminio y cabecera', 'cat_imagen' => 'visso-silloneria-operativos-smart-b-aluminio-cabecera.jpg', 'cat_sub' => 13, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 45],

                    // Hubo un error y este es silla gerencial
                    ['marca_id' => 3, 'cat_nombre' => 'Senior', 'cat_imagen' => 'visso-silloneria-operativos_senior.jpg', 'cat_sub' => 12, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 46],

                ['marca_id' => 3, 'cat_nombre' => 'VISITA', 'cat_imagen' => 'visso-sillonera-ergonomica-visita.jpg', 'cat_sub' => 11, 'cat_parent' => 14, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'Butterfly', 'cat_imagen' => 'visso-silloneria-visita-butterfly.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 47],
                    ['marca_id' => 3, 'cat_nombre' => 'Iso Carpeta', 'cat_imagen' => 'visso-silloneria-visita-isocarpeta.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 48],
                    ['marca_id' => 3, 'cat_nombre' => 'Linea Iso', 'cat_imagen' => 'visso-silloneria-visita-linea-iso.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 49],
                    ['marca_id' => 3, 'cat_nombre' => 'Línea Iso con Brazo', 'cat_imagen' => 'visso-silloneria-visita-linea-iso-brazo.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 50],
                    ['marca_id' => 3, 'cat_nombre' => 'Step Malla', 'cat_imagen' => 'visso-silloneria-visita-step-malla.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 51],
                    ['marca_id' => 3, 'cat_nombre' => 'Step Tapizada', 'cat_imagen' => 'visso-silloneria-visita-steptapizada.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 52],
                    ['marca_id' => 3, 'cat_nombre' => 'VERSA', 'cat_imagen' => 'visso-silloneria-visita-versa.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 53],
                    ['marca_id' => 3, 'cat_nombre' => 'FLIP', 'cat_imagen' => 'visso-silloneria-visita-flip.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 54],
                    ['marca_id' => 3, 'cat_nombre' => 'UP', 'cat_imagen' => 'visso-silloneria-visita-up.jpg', 'cat_sub' => 14, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 55],

            ['marca_id' => 3, 'cat_nombre' => 'SISTEMAS MODULARES', 'cat_imagen' => 'visso-sistemas-modulares.jpg', 'cat_sub' => 1, 'cat_parent' => 15],
                ['marca_id' => 3, 'cat_nombre' => 'SISTEMA DE PANELES', 'cat_imagen' => 'visso-sistemas-modulares-paneles.jpg', 'cat_sub' => 15, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 56],
                ['marca_id' => 3, 'cat_nombre' => 'SISTEMAS BENCH', 'cat_imagen' => 'visso-sistemas-modulares-bench.jpg', 'cat_sub' => 15, 'cat_detalle' => 0, 'cat_parent' => 16, 'cat_sub_nivel' => 2],
                    ['marca_id' => 3, 'cat_nombre' => 'BENCH ASTER', 'cat_imagen' => 'visso-sistemas-modulares-sistema-bench-bench-aster-aster1.jpg', 'cat_sub' => 16, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 57],
                    ['marca_id' => 3, 'cat_nombre' => 'BENCH QUADRA', 'cat_imagen' => 'visso-sistemas-modulares-sistema-bench-bench-quadra-quadra1.jpg', 'cat_sub' => 16, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 58],


            // ARESLINE
            ['marca_id' => 1, 'cat_nombre' => 'AMADEUS', 'cat_imagen' => 'aresline-amadeus.jpg', 'cat_sub' => 1, 'cat_parent' => 0, 'cat_detalle' => 1, 'product_id' => 59],
            ['marca_id' => 1, 'cat_nombre' => 'LINK XPLUS', 'cat_imagen' => 'aresline-link-axus.jpg', 'cat_sub' => 1, 'cat_parent' => 0, 'cat_detalle' => 1, 'product_id' => 60],
            ['marca_id' => 1, 'cat_nombre' => 'PARLAMENT', 'cat_imagen' => 'aresline-parlament.jpg', 'cat_sub' => 1, 'cat_parent' => 0, 'cat_detalle' => 1, 'product_id' => 61],
            ['marca_id' => 1, 'cat_nombre' => 'PF3', 'cat_imagen' => 'aresline-pf3.jpg', 'cat_sub' => 1, 'cat_parent' => 0, 'cat_detalle' => 1, 'product_id' => 62],
            ['marca_id' => 1, 'cat_nombre' => 'TRENDY FIRST CLASS', 'cat_imagen' => 'aresline-trendy-fc.jpg', 'cat_sub' => 1, 'cat_parent' => 0, 'cat_detalle' => 1, 'product_id' => 63],
            ['marca_id' => 1, 'cat_nombre' => 'XTEN', 'cat_imagen' => 'aresline-xten.jpg', 'cat_sub' => 1, 'cat_parent' => 0, 'cat_detalle' => 1, 'product_id' => 64],


            // QUADRIFOGLIO
            ['marca_id' => 2, 'cat_nombre' => 'MOBILIARIO', 'cat_imagen' => 'quadri-mobiliario.jpg', 'cat_sub' => 1, 'cat_parent' => 2, 'cat_detalle' => 0, 'cat_sub_nivel' => 1],
            ['marca_id' => 2, 'cat_nombre' => 'SILLAS', 'cat_imagen' => 'quadri-sillas.jpg', 'cat_sub' => 1, 'cat_parent' => 7, 'cat_detalle' => 0, 'cat_sub_nivel' => 1],

                // MOBILIARIO
                ['marca_id' => 2, 'cat_nombre' => 'BOISERE', 'cat_imagen' => 'quadri-mobiliario-boilere.jpg', 'cat_sub' => 2, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 2, 'product_id' => 65],

                ['marca_id' => 2, 'cat_nombre' => 'DIRECCIONALES', 'cat_imagen' => 'quadri-mobiliario-direccionales.jpg', 'cat_sub' => 2, 'cat_parent' => 3, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'T45', 'cat_imagen' => 'quadri-mobiliario-direccionales_t45.jpg', 'cat_sub' => 3, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 66],
                    ['marca_id' => 2, 'cat_nombre' => 'X7', 'cat_imagen' => 'quadri-mobiliario-direccionales_x7.jpg', 'cat_sub' => 3, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 67],
                    ['marca_id' => 2, 'cat_nombre' => 'X8', 'cat_imagen' => 'quadri-mobiliario-direccionales_x8.jpg', 'cat_sub' => 3, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 68],
                    ['marca_id' => 2, 'cat_nombre' => 'XTIME WORK', 'cat_imagen' => 'quadri-mobiliario-direccionales_xtimework.jpg', 'cat_sub' => 3, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 69],

                ['marca_id' => 2, 'cat_nombre' => 'MOSTRADORES', 'cat_imagen' => 'quadri-mobiliario-mostradores-z2.jpg', 'cat_sub' => 2, 'cat_parent' => 4, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'Z2', 'cat_imagen' => 'quadri-mobiliario-mostradores-z2.jpg', 'cat_sub' => 4, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 70],

                ['marca_id' => 2, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'quadri-mobiliario-operativos.jpg', 'cat_sub' => 2, 'cat_parent' => 5, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'SIT STAND', 'cat_imagen' => 'quadri-mobiliario-sit-stand.jpg', 'cat_sub' => 5, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 71],
                    ['marca_id' => 2, 'cat_nombre' => 'SYSTEM', 'cat_imagen' => 'quadri-mobiliario-operativos-system.jpg', 'cat_sub' => 5, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 72],
                    ['marca_id' => 2, 'cat_nombre' => 'X2', 'cat_imagen' => 'quadri-mobiliario-operativos-x2.jpg', 'cat_sub' => 5, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 73],
                    ['marca_id' => 2, 'cat_nombre' => 'X4', 'cat_imagen' => 'quadri-mobiliario-operativos-x4.jpg', 'cat_sub' => 5, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 74],

                ['marca_id' => 2, 'cat_nombre' => 'REUNIÓN', 'cat_imagen' => 'quadri-mobiliario-reunion.jpg', 'cat_sub' => 2, 'cat_parent' => 6, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'X7', 'cat_imagen' => 'quadri-mobiliario-reunion-x7.jpg', 'cat_sub' => 6, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 75],
                    ['marca_id' => 2, 'cat_nombre' => 'X8', 'cat_imagen' => 'quadri-mobiliario-reunion-x8.jpg', 'cat_sub' => 6, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 76],

                // SILLAS
                ['marca_id' => 2, 'cat_nombre' => 'DIRECCIONALES', 'cat_imagen' => 'quadri-sillas-direccionales.jpg', 'cat_sub' => 7, 'cat_parent' => 8, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'DAHLIA', 'cat_imagen' => 'quadri-sillas-direccionales-dahlia.jpg', 'cat_sub' => 8, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 77],
                    ['marca_id' => 2, 'cat_nombre' => 'DAMA', 'cat_imagen' => 'quadri-sillas-direccionales-dama.jpg', 'cat_sub' => 8, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 78],
                    ['marca_id' => 2, 'cat_nombre' => 'DINAMICA', 'cat_imagen' => 'quadri-sillas-direccionales-dinamica.jpg', 'cat_sub' => 8, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 79],
                    ['marca_id' => 2, 'cat_nombre' => 'DIRECTA', 'cat_imagen' => 'quadri-sillas-direccionales-directa-DIRECTA_1.jpg', 'cat_sub' => 8, 'cat_parent' => 0, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 80],

                ['marca_id' => 2, 'cat_nombre' => 'OPERATIVOS', 'cat_imagen' => 'quadri-sillas-operativos.jpg', 'cat_sub' => 7, 'cat_parent' => 9, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'OLTRE', 'cat_imagen' => 'quadri-sillas-op-OLTRE2_S.jpg', 'cat_sub' => 9, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 81],
                    ['marca_id' => 2, 'cat_nombre' => 'OMBRA', 'cat_imagen' => 'quadri-sillas-operativos-OMBRA_1.jpg', 'cat_sub' => 9, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 82],
                    ['marca_id' => 2, 'cat_nombre' => 'OMNIA', 'cat_imagen' => 'quadri-sillas-operativos-OMNIA_4.jpg', 'cat_sub' => 9, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 83],
                    ['marca_id' => 2, 'cat_nombre' => 'OXYGEN', 'cat_imagen' => 'quadri-sillas-operativos-OXYGEN_1.jpg', 'cat_sub' => 9, 'cat_detalle' => 1, 'cat_sub_nivel' => 3, 'product_id' => 84],

                ['marca_id' => 2, 'cat_nombre' => 'REUNIÓN', 'cat_imagen' => 'quadri-sillas-reunion-cove.jpg', 'cat_sub' => 7, 'cat_parent' => 10, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'COVE', 'cat_imagen' => 'quadri-sillas-reunion-COVE_1.jpg', 'cat_sub' => 10, 'cat_detalle' => 1, 'product_id' => 85, 'cat_sub_nivel' => 3],

                ['marca_id' => 2, 'cat_nombre' => 'SILLONES DE ESPERA', 'cat_imagen' => 'quadri-sillas-sillones-espera.jpg', 'cat_sub' => 7, 'cat_parent' => 11, 'cat_detalle' => 0, 'cat_sub_nivel' => 2],
                    ['marca_id' => 2, 'cat_nombre' => 'ACCORD', 'cat_imagen' => 'quadri-sillas-sillones-espera-accord-ACCORD1.jpg', 'cat_sub' => 11, 'cat_detalle' => 1, 'product_id' => 86, 'cat_sub_nivel' => 3],
                    ['marca_id' => 2, 'cat_nombre' => 'AGIO', 'cat_imagen' => 'quadri-sillas-sillones-espera-agio-OFFISIT_AGIO_3.jpg', 'cat_sub' => 11, 'cat_detalle' => 1, 'product_id' => 87, 'cat_sub_nivel' => 3],
                    ['marca_id' => 2, 'cat_nombre' => 'ASSO', 'cat_imagen' => 'quadri-sillas-sillones-espera-asso-OFFISIT_ASSO_1.jpg', 'cat_sub' => 11, 'cat_detalle' => 1, 'product_id' => 88, 'cat_sub_nivel' => 3],
        ];

        foreach ($categorias as $key => $value) {
        	Categoria::create($value);
        }
    }
}
