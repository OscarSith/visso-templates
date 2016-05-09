<?php

use Illuminate\Database\Seeder;
use App\Galeria;

class GaleryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galery = [
            // VISSO PARA VALLAS
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-pandejapapela4.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-ordenador.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-np-portique-simple.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-florero.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-clasificador-3-secciones.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-caja-de-lapiceros4.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-caja-de-lapiceros3.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-caja-de-lapiceros2.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-bandeja-para-telefono.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-bandeja-de-lapiceros.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-bandeja-de-correo2.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-bandeja-de-correo.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-bandeja-de-correo-triple.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-bandeja-de-correo-doble.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-apoyo-blinder.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-parrila-grande-con-bandeja-para-lapiceros.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-sujetador-de-fotos-con-placa-para-nombre.jpg'],
            ['producto_id' => 1, 'pro_imagen_default' => 'visso-accesorios-para-vallas-tablero-de-corcho.jpg'],

            // VISSO APOYA PIES
            ['producto_id' => 2, 'pro_imagen_default' => 'visso-accesorios-apoya-pies.jpg'],
            ['producto_id' => 2, 'pro_imagen_default' => 'visso-accesorios-apoya-pies-rp2_29.jpg'],
            ['producto_id' => 2, 'pro_imagen_default' => 'visso-accesorios-apoya-pies-RP1_29_24_C.jpg'],
            ['producto_id' => 2, 'pro_imagen_default' => 'visso-accesorios-apoya-pies-RP1_29_24_B.jpg'],
            ['producto_id' => 2, 'pro_imagen_default' => '.visso-accesorios-apoya-pies-RP1_24_29.jpg'],

            // VISSO PORTA CPUR
            ['producto_id' => 3, 'pro_imagen_default' => 'visso-accesorios-porta-cpu.jpg'],
            ['producto_id' => 3, 'pro_imagen_default' => 'visso-accesorios-porta-cpu-UCV-PC-amb3.jpg'],
            ['producto_id' => 3, 'pro_imagen_default' => 'visso-accesorios-porta-cpu-UCV-PC-amb2.jpg'],
            ['producto_id' => 3, 'pro_imagen_default' => 'visso-accesorios-porta-cpu-UCV-PC-haut.jpg'],

            // VISSO PORTA MONITORES
            ['producto_id' => 4, 'pro_imagen_default' => 'visso-accesorios-porta-monitores.jpg'],
            ['producto_id' => 4, 'pro_imagen_default' => 'visso-accesorios-porta-monitores-SUP-LCD-S-CP.jpg'],
            ['producto_id' => 4, 'pro_imagen_default' => 'visso-accesorios-porta-monitores-SUP-LCD-B-SURF.jpg'],
            ['producto_id' => 4, 'pro_imagen_default' => 'visso-accesorios-porta-monitores-SUP-LCD-B-CP.jpg'],
            ['producto_id' => 4, 'pro_imagen_default' => 'visso-accesorios-porta-monitores-PLUG-&-PLAY-dos.jpg'],
            ['producto_id' => 4, 'pro_imagen_default' => 'visso-accesorios-porta-monitores-PLUG-&-PLAY-chrome.jpg'],
            ['producto_id' => 4, 'pro_imagen_default' => 'visso-accesorios-porta-monitores-PLUG-&-PLAY-bras.jpg'],

            // VISSO VALLAS 3 en 1
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-support-mixte-portique-ecran.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-support-mixte-Amb.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-ecran-separation-Amb.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-ecran-de-separation.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-CTA-E16.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-CTA-E10.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-CTA-E05.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-cache-PMMA.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP-amb1.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-np-3o1.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP_CVT.jpg'],
            ['producto_id' => 5, 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1-NP_CM-VA.jpg'],

            // ARCHIVOS MOVILES
            ['producto_id' => 6, 'pro_imagen_default' => 'visso-almacenamiento-cajoneras-movil.jpg', 'name' => '03 CAJONES LATERALES', 'description' => '<p><strong>Características</strong></p><p>Gracias a las ruedas de alta transito, las cajoneras móviles cuentan con una gran flexibilidad de movimiento permitiendo así al usuario disponer de la mejor manera de su espacio disponible.<br>Configuraciones:</p><p>- 03 cajones estándar</p>'],
            ['producto_id' => 6, 'pro_imagen_default' => 'visso-almacenamiento-cajoneras-movil-02-cajones.jpg', 'name' => '02 CAJONES', 'description' => '<p><strong>Características</strong></p><p>Gracias a las ruedas de alta transito, las cajoneras móviles cuentan con una gran flexibilidad de movimiento permitiendo así al usuario disponer de la mejor manera de su espacio disponible.<br>Configuraciones:</p><p>- 02 cajones estándar<br>- 02 cajones estándar con cojín de visita.<br>- 02 cajones de archivo para files de bolsa.</p>'],
            ['producto_id' => 6, 'pro_imagen_default' => 'visso-almacenamiento-cajoneras-movil-02-cajones-01-file-bolsa.jpg', 'name' => '02 cajones estándar y 1 file de bolsa', 'description' => '<p><strong>Características</strong></p><p>Gracias a las ruedas de alta transito, las cajoneras móviles cuentan con una gran flexibilidad de movimiento permitiendo así al usuario disponer de la mejor manera de su espacio disponible.</p><p>Configuraciones:<br>- 03 cajones estándar.</p><p>- 02 cajones estándar y un cajón de archivo para files de bolsa.</p>'],

            // ARMARIO - GERENCIAL
            ['producto_id' => 7, 'pro_imagen_default' => 'visso-almacenamiento-armario-gerenciales-ceo.jpg', 'name' => 'ARMARIO GERENCIAL CEO', 'description' => '<p><strong>Características</strong></p><p>Armarios medios utilizados dentro de la configuracion de oficina abierta.</p><p>Ademas de su caracteristica de almacenamiento, sirve como separador y delimitador de espacios.</p><p>Puertas en melamina o vidrio o con marco de aluminio.</p><p>18 colores disponibles.</p><p>Dimension estandar: 1.20 m. de alto x 0.90 m. de ancho x 0.40 m de fando (con puertas)</p>'],
            ['producto_id' => 7, 'pro_imagen_default' => 'visso-almacenamiento-armario-gerenciales-duna.jpg', 'name' =>'Armario gerencia Duna', 'description' => '<p><strong>Características</strong></p><p>Duna es una configuración de armarios gerenciales con puertas de melamina y vidrio.</p>'],
            ['producto_id' => 7, 'pro_imagen_default' => 'visso-almacenamiento-armario-gerenciales-mito.jpg', 'name' =>'Armario gerencial Mito', 'description' => '<p><strong>Características</strong></p><p>Armario gerencial con laterales de melamina y central con puertas de vidrio.</p><p>Opcional marco de aluminio (consultar).</p><p>Dimensiones: 2.70 m. de ancho x 2.0 m. de alto x 0.40 m. de fondo.</p>'],
            ['producto_id' => 7, 'pro_imagen_default' => 'visso-almacenamiento-armario-gerenciales-salas-reuniones.jpg', 'name' =>'Armario para salas de Reuniones', 'description' => '<p><strong>Características</strong></p><p>Ideal para complementar las salas de reuniones gerenciales.</p><p>La configuracion del mueble es flexible,de acuerdo a las necesidades del cliente.</p>'],

            // ARMARIO - OPERATIVO
            ['producto_id' => 8, 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos-Armario-Mixto.jpg', 'name' => 'ARMARIO MIXTO'],
            ['producto_id' => 8, 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos-con-sin-puertas.jpg', 'name' => 'ARMARIO CON Y SIN PUERTAS', 'description' => '<p><strong>Características</strong></p><p>Las características técnicas de los armarios VISSO son superiores a un armario convencional. Están diseñados con un sistema de clavijas especial que les permite soportas altas cargas, no dobl·ndose con el peso.</p><p>18 colores disponibles.</p><p>Dimension estandar: 1.98 m. de alto x 0.90 m. de ancho x 0.40 m de fondo</p>'],
            ['producto_id' => 8, 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos-03-niveles.jpg', 'name' => 'ARMARIO de 3 niveles', 'description' => '<p><strong>Características</strong></p><p>Armarios medios utilizados dentro de la configuracion de oficina abierta.</p><p>Ademas de su caracteristica de almacenamiento, sirve como separador y delimitador de espacios.</p><p>Puertas en melamina o vidrio o con marco de aluminio.</p><p>18 colores disponibles.</p><p>Dimension estandar: 1.20 m. de alto x 0.90 m. de ancho x 0.40 m de fando (con puertas)</p>'],
            ['producto_id' => 8, 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos-modular-alto.jpg', 'name' => 'ARMARIO MODULAR ALTO', 'description' => '<p><strong>Características</strong></p><p>Armario operativo de diseÒo moderno.</p><p>18 colores disponibles.</p><p>Dimension estandar: 1.98 m. de alto x 0.90 m. de ancho x 0.40 m de fando (con puertas).</p>'],
            ['producto_id' => 8, 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos-modular-medio.jpg', 'name' => 'ARMARIO MODULAR MEDIO', 'description' => '<p><strong>Características</strong></p><p>Armario operativo de diseño moderno.</p><p>18 colores disponibles.</p><p>Dimension estandar: 1.60 m. de alto x 0.90 m. de ancho x 0.40 m de fando (con puertas).</p>'],
            ['producto_id' => 8, 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos-piso-techo.jpg', 'name' => 'ARMARIO PISO TECHO', 'description' => '<p><strong>Características</strong></p><p>Armarios diseÒados para cerrar espacios altos y para aprovechar al maximo el espacio disponible en altura de una oficina.</p><p>18 colores disponibles.</p>'],
            ['producto_id' => 8, 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos-piso-techo.jpg', 'name' => 'ARMARIO PUERTA CORREDIZA', 'description' => '<p><strong>Características</strong></p><p>Se utilizan cuando hay poco espacio disponible para el uso de puertas convencionales.</p><p>18 colores disponibles.</p>'],


            // ARCHIVOS CAJONERAS
            ['producto_id' => 9, 'pro_imagen_default' => 'visso-almacenamiento-archivos-cajoneras-cajoneras-fijas.jpg', 'name' => 'Cajoneras Fijas', 'description' => '<p><strong>Características</strong></p><p>Configuraciones:<ul><li>02 cajones estándar.</li><li>03 cajones estándar.</li><li>02 cajones estándar y un cajón de archivo para files de bolsa.</li>18 colores disponibles.</p>'],
            ['producto_id' => 9, 'pro_imagen_default' => 'visso-almacenamiento-archivos-cajoneras-archivos-verticales.jpg', 'name' => 'CAJONERAS VERTICALES', 'description' => '<p><strong>Características</strong></p><p>Configuracion: 02, 03, 04 o 05 cajones.</p><p>18 colores disponibles.</p>'],
            ['producto_id' => 9, 'pro_imagen_default' => 'visso-almacenamiento-archivos-cajoneras-Porta-files-de-bolsa-horizontal.jpg', 'name' => 'Porta Files Horizontal', 'description' => '<p><strong>Características</strong></p><p>Porta archivos colgantes de 73 cm. de altura y 84 cm. de ancho.</p>'],

            // ARCHIVOS - CREDENZA
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-almacenero-puertas-corredizas.jpg', 'name' => 'Almacenero puertas corredizas', 'description' => '<p><strong>Características</strong></p><p>Por lo general sus dimensiones están entre 0.80 y 1.0 m de ancho.<br>18 colores de melamina disponibles.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-almacenero-puertas-batientes.jpg', 'name' => 'Almacenero puertas batientes', 'description' => '<p><strong>Características</strong></p><p>Por lo general sus dimensiones est·n entre 0.80 y 1.0 m de ancho.</p><p>18 colores de melamina disponibles.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-almacenero-sin-puertas.jpg', 'name' => 'Almacenero sin puertas', 'description' => '<p><strong>Características</strong></p><p>Por lo general sus dimensiones est·n entre 0.80 y 1.0 m de ancho.</p><p>18 colores de melamina disponibles.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-credenza-de-puertas-corredizas.jpg', 'name' => 'Credenza de puertas corredizas', 'description' => '<p><strong>Características</strong></p><p>Las dimensiones varÌan entre 1.40 y 2.0 m seg˙n el espacio y la configuraciÛn deseada por el usuario.</p><p>Las combinaciones son infinitas, adem·s de la disponibilidad de acabados:  18 colores de melamina, 12 acabados de enchape de madera y pintura de poliuretano.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-credenza-porta-documentos.jpg', 'name' => 'Credenza porta documentos', 'description' => '<p><strong>Características</strong></p><p>Credenza abierta para el transporte de documentos.</p><p>Dispone de ruedas de alto transito.</p><p>Las dimensiones varÌan entre 1.20 y 1.40 m seg˙n el espacio y la configuraciÛn deseada por el usuario.</p><p>Las combinaciones son infinitas, adem·s de la disponibilidad de acabados:  18 colores de melamina, 12 acabados de enchape de madera y pintura de poliuretano.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-credenza-puertas-batientes-y-almacen-central.jpg', 'name' => 'Credenza puertas batientes y almacen central', 'description' => '<p><strong>Características</strong></p><p>Las dimensiones varÌan entre 1.20 y 4.0 m seg˙n el espacio y la configuraciÛn deseada por el usuario.</p><p>Las combinaciones son infinitas, adem·s de la disponibilidad de acabados:  18 colores de melamina, 12 acabados de enchape de madera y pintura de poliuretano.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-enchapada-de-madera-con-puertas-batientes.jpg', 'name' => 'Credenza enchapada en madera con puertas batientes', 'description' => '<p><strong>Características</strong></p><p>Credenza gerencial enchapada en madera con acabado brillante o con acabado en pintura de poliuretano.</p><p>Configuraciones disponibles: 03, 04, 05 y 06 puertas.</p><p>Las dimensiones varÌan entre 1.20 y 2.0 m seg˙n el espacio y la configuraciÛn deseada por el usuario.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-enchapada-de-madera-mixta.jpg', 'name' => 'Credenza enchapada de madera mixta', 'description' => '<p><strong>Características</strong></p><p>Credenza gerencial enchapada en madera con acabado brillante o con acabado en pintura de poliuretano.</p><p>Las dimensiones varÌan entre 1.20 y 2.0 m seg˙n el espacio y la configuraciÛn deseada por el usuario.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-enchapadas-de-madera-modelo-Salvata.jpg', 'name' => 'Credenza modelo salvata', 'description' => '<p><strong>Características</strong></p><p>Credenza gerencial enchapada en madera con acabado brillante y puertas con perfiles de alumino y vidrio laminado.</p><p>Dimensiones: 1.80 m. de ancho x 0.74 m. de alto.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-mixta-corta.jpg', 'name' => 'Credenza mixta Corta', 'description' => '<p><strong>Características</strong></p><p>Las dimensiones varÌan entre 1.0 y 1.20 m seg˙n el espacio y la configuraciÛn deseada por el usuario.</p><p>Las combinaciones son infinitas, adem·s de la disponibilidad de acabados:  18 colores de melamina, 12 acabados de enchape de madera y pintura de poliuretano.</p>'],
            ['producto_id' => 10, 'pro_imagen_default' => 'visso-almacenamiento-archivos-credenzas-mixta-larga.jpg', 'name' => 'Credenza mixta Larga', 'description' => '<p><strong>Características</strong></p><p>Las dimensiones varÌan entre 1.40 y 4.0 m seg˙n el espacio y la configuraciÛn deseada por el usuario.</p><p>Las combinaciones son infinitas, adem·s de la disponibilidad de acabados:  18 colores de melamina, 12 acabados de enchape de madera y pintura de poliuretano.</p>'],

            // VISSO ESCRITORIO
            // GERENCIALES - ARKO
            ['producto_id' => 11, 'pro_imagen_default' => 'visso-escritorio-gerenciales-arko.jpg'],

            // GERENCIALES - DELTA
            ['producto_id' => 12, 'pro_imagen_default' => 'visso-escritorios-gerenciales-delta.jpg', 'name' => 'Cajoneras Fijas'],

            // GERENCIALES - QUADA GERENCIAL
            ['producto_id' => 13, 'pro_imagen_default' => 'visso-escritorio-gerenciales-quadra-con-credenza.jpg'],
            ['producto_id' => 13, 'pro_imagen_default' => 'visso-escritorio-gerenciales-quadra-con-cajonera.jpg'],
            ['producto_id' => 13, 'pro_imagen_default' => 'visso-escritorio-gerenciales-quadra-con-credenza1.jpg'],

            // GERENCIALES - TARGA
            ['producto_id' => 14, 'pro_imagen_default' => 'visso-escritorios-gerenciales-targa.jpg'],

            // GERENCIALES - SERVA
            ['producto_id' => 15, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-serva.jpg'],

            // OPERATIVOS ABACO
            ['producto_id' => 16, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco.jpg'],
            ['producto_id' => 16, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-pata-abaco.jpg'],
            ['producto_id' => 16, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-simple.jpg'],
            ['producto_id' => 16, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-multiple-con-credenza.jpg'],
            ['producto_id' => 16, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-gerencial.jpg'],
            ['producto_id' => 16, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-doble.jpg'],

            // OPERATIVOS - ASTER
            ['producto_id' => 17, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-aster.jpg'],
            ['producto_id' => 17, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-aster-aster-simple.jpg'],
            ['producto_id' => 17, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-aster-aster-en-L.jpg'],

            // OPERATIVOS - LINEA QUADRA
            ['producto_id' => 18, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra.jpg'],
            ['producto_id' => 18, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadras-con-separadores-de-melamina.jpg'],
            ['producto_id' => 18, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadra-simple.jpg'],
            ['producto_id' => 18, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadra-recto.jpg'],
            ['producto_id' => 18, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadra-con-armario-separador.jpg'],
            ['producto_id' => 18, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-cuadra-en-L.jpg'],

            // OPERATIVOS - MISKI
            ['producto_id' => 19, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-miski.jpg'],

            // OPERATIVOS - PORTICO
            ['producto_id' => 20, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-portico.jpg'],

            // PRESIDENCIALES - DUCON
            ['producto_id' => 21, 'pro_imagen_default' => 'visso-escritorio-presidenciales-ducon.jpg'],
            ['producto_id' => 21, 'pro_imagen_default' => 'visso-escritorio-presidenciales-ducon-gerencial-dukon_0011_prv.jpg'],
            ['producto_id' => 21, 'pro_imagen_default' => 'visso-escritorio-presidenciales-ducon-ducon2.jpg'],

            // MESSA REUNION
            // ACCORDO
            ['producto_id' => 22, 'pro_imagen_default' => 'visso-messa-reunion-accord.jpg'],
            ['producto_id' => 22, 'pro_imagen_default' => 'visso-messa-reunion-accordo-accordo-en-poliuretano.jpg'],
            ['producto_id' => 22, 'pro_imagen_default' => 'visso-messa-reunion-accordo-accordo-enchapada-en-madera.jpg'],

            // ACTIVA
            ['producto_id' => 23, 'pro_imagen_default' => 'visso-messa-reunion-activa.jpg'],
            ['producto_id' => 23, 'pro_imagen_default' => 'visso-messa-reunion-activa-activa-2.jpg'],

            // AVANTI
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-messa-reunion-avanti.jpg'],
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-messa-reunion-avanti-avanti_0011_prv.jpg'],

            // CIRCULAR
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-messa-reunion-circular.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-messa-reunion-circular-impulsa-larga.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-messa-reunion-circular-impulsa-corta.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-messa-reunion-circular-circular-de-melamina.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-messa-reunion-circular-archimede-image-6.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-messa-reunion-circular-13.jpg'],

            // INIZIO
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-messa-reunion-inizio.jpg'],
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-messa-reunion-inizio-mesa-inizio-de-poliuretano.jpg'],
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-messa-reunion-inizio-mesa-inizio-de-formica.jpg'],

            // OVALADAS
            ['producto_id' => 27, 'pro_imagen_default' => 'visso-messa-reunion-ovaladas.jpg'],
            ['producto_id' => 27, 'pro_imagen_default' => 'visso-messa-reunion-ovaladas-mesa-ovalada-patas-de-melamina.jpg'],

            // REBATIBLES
            ['producto_id' => 28, 'pro_imagen_default' => 'visso-messa-reunion-rebatible.jpg'],
            ['producto_id' => 28, 'pro_imagen_default' => 'visso-messa-reunion-rebatible-mesa-rebatible-2.jpg'],

            // IMPULSA
            ['producto_id' => 29, 'pro_imagen_default' => 'visso-messa-reunion-impulsa.jpg'],
            ['producto_id' => 29, 'pro_imagen_default' => 'visso-messa-reunion-impulsa-impulsa-larga.jpg'],
            ['producto_id' => 29, 'pro_imagen_default' => 'visso-messa-reunion-impulsa-impulsa-corta.jpg'],

            // INTEGRA
            ['producto_id' => 30, 'pro_imagen_default' => 'visso-silloneria-ergonimica-gerenciales-Integra2.jpg'],
            ['producto_id' => 30, 'pro_imagen_default' => 'visso-silloneria-ergonimica-gerenciales-Integra1.jpg'],
            ['producto_id' => 30, 'pro_imagen_default' => 'visso-silloneria-ergonimica-gerenciales-Integra3.jpg'],

            // CONSIGUIERI ALTA
            ['producto_id' => 31, 'pro_imagen_default' => 'visso-silloneria-consiglierialta.jpg'],
            ['producto_id' => 31, 'pro_imagen_default' => 'visso-silloneria-consiglierialta-class-alta-1552.jpg'],
            ['producto_id' => 31, 'pro_imagen_default' => 'visso-silloneria-consiglierialta-class-alta-1535.jpg'],

            // CONSIGUIERI BAJA
            ['producto_id' => 32, 'pro_imagen_default' => 'visso-silloneria-consiglieribaja-baja.jpg'],
            ['producto_id' => 32, 'pro_imagen_default' => 'visso-silloneria-consiglieribaja-manager-baja-1510.jpg'],
            ['producto_id' => 32, 'pro_imagen_default' => 'visso-silloneria-consiglieribaja-manager-baja-1514.jpg'],

            // CONSIGLIERI TRINEO
            ['producto_id' => 34, 'pro_imagen_default' => 'visso-silloneria-consiglieri-trineo.jpg'],

            // GURU ALTA
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-silloneria-gurualta.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-silloneria-gurualta-manager-alta-4.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-silloneria-gurualta-manager-alta-3.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-silloneria-gurualta-manager-alta-1.jpg'],

            // GURU BAJA
            ['producto_id' => 35, 'pro_imagen_default' => 'visso-silloneria-gurubaja.jpg'],
            ['producto_id' => 35, 'pro_imagen_default' => 'visso-silloneria-gurubaja-manager-baja-1467.jpg'],
            ['producto_id' => 35, 'pro_imagen_default' => 'visso-silloneria-gurubaja-manager-baja-1465.jpg'],

            // GURÚ TRINEO
            ['producto_id' => 36, 'pro_imagen_default' => 'visso-silloneria-guru-trineo.jpg'],

            // CLIO
            ['producto_id' => 37, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio1.jpg'],
            ['producto_id' => 37, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio2.jpg'],
            ['producto_id' => 37, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio3.jpg'],
            ['producto_id' => 37, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio4.jpg'],

            // CLIO CAJERA
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA3.jpg'],
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA1.jpg'],
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA2.jpg'],
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA4.jpg'],
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA5.jpg'],

            // CONFORT
            ['producto_id' => 39, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort1.jpg'],
            ['producto_id' => 39, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort2.jpg'],
            ['producto_id' => 39, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort3.jpg'],
            ['producto_id' => 39, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort4.jpg'],

            // CONFORT BASE ALUMINIO
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio1.jpg'],
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio2.jpg'],
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio3.jpg'],
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio4.jpg'],
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio5.jpg'],

            // GUIATTA
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta2.jpg'],
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta1.jpg'],
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta3.jpg'],
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta4.jpg'],

            // GUIATTA ALUMINIO
            ['producto_id' => 42, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio1.jpg'],
            ['producto_id' => 42, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio2.jpg'],
            ['producto_id' => 42, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio3.jpg'],
            ['producto_id' => 42, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio4.jpg'],

            // SMART
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart1.jpg'],
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart2.jpg'],
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart3.jpg'],
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart4.jpg'],
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart5.jpg'],

            // SMART BASE ALUMINIO
            ['producto_id' => 44, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio1.jpg'],
            ['producto_id' => 44, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio2.jpg'],
            ['producto_id' => 44, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio3.jpg'],
            ['producto_id' => 44, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio4.jpg'],
            ['producto_id' => 44, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio5.jpg'],

            // SMART ALUMINIO CABECERA
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-operativos-smart-b-aluminio-cabecera.jpg'],
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera2.jpg'],
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera3.jpg'],
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera4.jpg'],
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera5.jpg'],

            // SENIOR
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior1.jpg'],
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior2.jpg'],
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior3.jpg'],
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior4.jpg'],

            // BUTTERFLY
            ['producto_id' => 47, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-butterfly-1.jpg'],
            ['producto_id' => 47, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-butterfly-2.jpg'],

            // ISO CARPETA
            ['producto_id' => 48, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isocarpeta-2.jpg'],
            ['producto_id' => 48, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isocarpeta-1.jpg'],

            // LÍNEA ISO
            ['producto_id' => 49, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-iso-3.jpg'],
            ['producto_id' => 49, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-iso-2.jpg'],
            ['producto_id' => 49, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-iso-1.jpg'],

            // LINEA ISO CON BRAZO
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO2.jpg'],
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO1.jpg'],
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO3.jpg'],
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO4.jpg'],

            // STEP MALLA
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla4.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla1.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla2.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla3.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla5.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla6.jpg'],

            // STEP TAPIZADA
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ5.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ1.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ2.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ3.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ4.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ6.jpg'],

            // VERSA
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa5.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa1.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa2.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa3.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa4.jpg'],

            // FLIP
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip4.jpg'],
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip1.jpg'],
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip2.jpg'],
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip3.jpg'],
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip5.jpg'],

            // UP
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up5.jpg'],
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up1.jpg'],
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up2.jpg'],
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up3.jpg'],
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up4.jpg'],
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up6.jpg'],
            // ['producto_id' => 4, 'pro_imagen_default' => '.jpg'],

            // SISTEMAS PANELES
            ['producto_id' => 56, 'pro_imagen_default' => 'visso-sistemas-modulares-paneles.jpg'],
            ['producto_id' => 56, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-paneles-PANELES1.jpg'],
            ['producto_id' => 56, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-paneles-PANELES3.jpg'],
            ['producto_id' => 56, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-paneles-PANELES4.jpg'],

            // BENCH ASTER
            ['producto_id' => 57, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-bench-bench-aster-aster1.jpg'],
            ['producto_id' => 57, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-bench-bench-aster-aster2.jpg'],

            // BENCH ASTER
            ['producto_id' => 58, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-bench-bench-quadra-quadra1.jpg'],
            ['producto_id' => 58, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-bench-bench-quadra-quadra2.jpg'],
            ['producto_id' => 58, 'pro_imagen_default' => 'visso-sistemas-modulares-sistema-bench-bench-quadra-quadra3.jpg'],

            // AMADEUS
            ['producto_id' => 59, 'pro_imagen_default' => 'aresline-amadeus-02.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'aresline-amadeus-03.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'aresline-amadeus-01.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'aresline-amadeus-04.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'aresline-amadeus-05.jpg'],

            // LINK-XPLUS
            ['producto_id' => 60, 'pro_imagen_default' => 'aresline-xplus-02.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'aresline-xplus-03.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'aresline-xplus-04.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'aresline-xplus-01.jpg'],

            // PARLAMENT
            ['producto_id' => 61, 'pro_imagen_default' => 'aresline-parlament-02.jpg'],
            ['producto_id' => 61, 'pro_imagen_default' => 'aresline-parlament-03.jpg'],
            ['producto_id' => 61, 'pro_imagen_default' => 'aresline-parlament-04.jpg'],
            ['producto_id' => 61, 'pro_imagen_default' => 'aresline-parlament-01.jpg'],

            // PF3
            ['producto_id' => 62, 'pro_imagen_default' => 'aresline-PF3-01.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'aresline-PF3-03.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'aresline-PF3-04.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'aresline-PF3-02.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'aresline-PF3-05.jpg'],

            // XTEN
            ['producto_id' => 64, 'pro_imagen_default' => 'aresline-xten-01.jpg'],
            ['producto_id' => 64, 'pro_imagen_default' => 'aresline-xten-03.jpg'],
            ['producto_id' => 64, 'pro_imagen_default' => 'aresline-xten-04.jpg'],
            ['producto_id' => 64, 'pro_imagen_default' => 'aresline-xten-02.jpg'],

            // TRENDY
            ['producto_id' => 63, 'pro_imagen_default' => 'aresline-trendy-01.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'aresline-trendy-03.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'aresline-trendy-04.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'aresline-trendy-02.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'aresline-trendy-05.jpg'],

        	// Boisere
        	['producto_id' => 65, 'pro_imagen_default' => 'quadri-mobiliario-boilere.jpg'],
        	['producto_id' => 65, 'pro_imagen_default' => 'quadri_boisere_2.jpg'],
        	['producto_id' => 65, 'pro_imagen_default' => 'quadri_boisere_3.jpg'],
        	['producto_id' => 65, 'pro_imagen_default' => 'quadri_boisere_4.jpg'],
        	['producto_id' => 65, 'pro_imagen_default' => 'quadri_boisere_5.jpg'],

        	//t45
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_2.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_3.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_4.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_5.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_6.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_7.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_8.jpg'],
        	['producto_id' => 66, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_9.jpg'],

        	// X7
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7.jpg'],
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_2.jpg'],
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_3.jpg'],
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_4.jpg'],
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_5.jpg'],
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_6.jpg'],
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_7.jpg'],
        	['producto_id' => 67, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_8.jpg'],

        	// X8
        	['producto_id' => 68, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x8.jpg'],
        	['producto_id' => 68, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x8_2.jpg'],

        	// XTIME-WORK
        	['producto_id' => 69, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework.jpg'],
        	['producto_id' => 69, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_2.jpg'],
        	['producto_id' => 69, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_3.jpg'],
        	['producto_id' => 69, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_4.jpg'],

        	// Z2
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_2.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_3.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_4.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_5.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_6.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_7.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_8.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_9.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_10.jpg'],
        	['producto_id' => 70, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_11.jpg'],

        	// SIt stand
        	['producto_id' => 71, 'pro_imagen_default' => 'quadri-mobiliario-operativos-sit-stand_2.jpg'],
        	['producto_id' => 71, 'pro_imagen_default' => 'quadri-mobiliario-operativos-sit-stand.jpg'],

        	// System
        	['producto_id' => 72, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system.jpg'],
        	['producto_id' => 72, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_2.jpg'],
        	['producto_id' => 72, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_3.jpg'],
        	['producto_id' => 72, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_4.jpg'],

        	// X2
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_2.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_3.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_4.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_5.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_6.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_7.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_8.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_9.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_10.jpg'],

        	// X4
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_2.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_3.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_4.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_5.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_6.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_7.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_8.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_9.jpg'],

        	// X7
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_2.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_3.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_4.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_5.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_6.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_7.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_8.jpg'],

        	// X8
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_2.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_3.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_4.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_5.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_6.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_7.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_8.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_9.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_10.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_11.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_12.jpg'],

        	// Direccionales
            // DAHLIA
            ['producto_id' => 77, 'pro_imagen_default' => 'quadri-sillas-direccionales-dahlia.jpg'],
            ['producto_id' => 77, 'pro_imagen_default' => 'quadri-sillas-direccionales-dahlia_2.jpg'],
        	['producto_id' => 77, 'pro_imagen_default' => 'quadri-sillas-direccionales-Dahlia_3.jpg'],

            // DAMA
            ['producto_id' => 78, 'pro_imagen_default' => 'quadri-sillas-direccionales-dama.jpg'],
            ['producto_id' => 78, 'pro_imagen_default' => 'quadri-sillas-direccionales-DAMA_1.jpg'],
      	['producto_id' => 78, 'pro_imagen_default' => 'quadri-sillas-direccionales-DAMA_3.jpg'],

            // DINAMICA
            ['producto_id' => 79, 'pro_imagen_default' => 'quadri-sillas-direccionales-dinamica.jpg'],
            ['producto_id' => 79, 'pro_imagen_default' => 'quadri-sillas-direccionales-DINAMICA_2.jpg'],
            ['producto_id' => 79, 'pro_imagen_default' => 'quadri-sillas-direccionales-DINAMICA_3.jpg'],

            // DIRECTA
            ['producto_id' => 80, 'pro_imagen_default' => 'quadri-sillas-direccionales-directa-DIRECTA_1.jpg'],
            ['producto_id' => 80, 'pro_imagen_default' => 'quadri-sillas-direccionales-directa-DIRECTA_2.jpg'],
      	['producto_id' => 80, 'pro_imagen_default' => 'quadri-sillas-direccionales-directa-DIRECTA_3.jpg'],

        	// OLTRE
            ['producto_id' => 81, 'pro_imagen_default' => 'quadri-sillas-op-OLTRE2_S.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-sillas-op-OLTRE02_Sm.jpg'],

            // OMBRA
            ['producto_id' => 82, 'pro_imagen_default' => 'quadri-sillas-operativos-OMBRA_1.jpg'],
            ['producto_id' => 82, 'pro_imagen_default' => 'quadri-sillas-operativos-OMBRA_2.jpg'],
            ['producto_id' => 82, 'pro_imagen_default' => 'quadri-sillas-operativos-OMBRA_3.jpg'],
            ['producto_id' => 82, 'pro_imagen_default' => 'quadri-sillas-operativos-OMBRA_4.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-sillas-operativos-OMBRA_5.jpg'],

            // OMNIA
            ['producto_id' => 83, 'pro_imagen_default' => 'quadri-sillas-operativos-OMNIA_4.jpg'],
            ['producto_id' => 83, 'pro_imagen_default' => 'quadri-sillas-operativos-OMNIA_1.jpg'],
            ['producto_id' => 83, 'pro_imagen_default' => 'quadri-sillas-operativos-OMNIA_2.jpg'],
            ['producto_id' => 83, 'pro_imagen_default' => 'quadri-sillas-operativos-OMNIA_3.jpg'],
            ['producto_id' => 83, 'pro_imagen_default' => 'quadri-sillas-operativos-OMNIA_5.jpg'],
            ['producto_id' => 83, 'pro_imagen_default' => 'quadri-sillas-operativos-OMNIA_6.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-sillas-operativos-OMNIA_7.jpg'],

            // OXYGEN
            ['producto_id' => 84, 'pro_imagen_default' => 'quadri-sillas-operativos-OXYGEN_1.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-sillas-operativos-OXYGEN_2.jpg'],

            // COVE
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_1.jpg'],
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_2.jpg'],
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_3.jpg'],
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_4.jpg'],
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_5.jpg'],
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_6.jpg'],
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_7.jpg'],
            ['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-reunion-COVE_8.jpg'],

            // ACCORD
            ['producto_id' => 86, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-accord-ACCORD1.jpg'],
            ['producto_id' => 86, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-accord-ACCORD2.jpg'],
            ['producto_id' => 86, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-accord-ACCORD3.jpg'],
            ['producto_id' => 86, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-accord-ACCORD4.jpg'],

            // AGIO
            ['producto_id' => 87, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-agio-OFFISIT_AGIO_3.jpg'],
            ['producto_id' => 87, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-agio-OFFISIT_AGIO_4.jpg'],

            // ASSO
            ['producto_id' => 88, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-asso-OFFISIT_ASSO_1.jpg'],
            ['producto_id' => 88, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-asso-OFFISIT_ASSO_2.jpg'],
            ['producto_id' => 88, 'pro_imagen_default' => 'quadri-sillas-sillones-espera-asso-OFFISIT_ASSO_3.jpg'],
        ];

        foreach ($galery as $key) {
        	Galeria::create($key);
        }
    }
}
