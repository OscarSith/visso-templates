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

            // VISSO ESCRITORIO
            // OPERATIVOS ABACO
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco.jpg'],
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-pata-abaco.jpg'],
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-simple.jpg'],
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-multiple-con-credenza.jpg'],
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-gerencial.jpg'],
            ['producto_id' => 24, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-abaco-abaco-doble.jpg'],

            // OPERATIVOS - ASTER
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-aster.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-aster-aster-simple.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-aster-aster-en-L.jpg'],
            ['producto_id' => 25, 'pro_imagen_default' => '.jpg'],

            // OPERATIVOS - MISKI
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra.jpg'],
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadras-con-separadores-de-melamina.jpg'],
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadra-simple.jpg'],
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadra-recto.jpg'],
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-quadra-con-armario-separador.jpg'],
            ['producto_id' => 26, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-quadra-cuadra-en-L.jpg'],

            // OPERATIVOS - MISKI
            ['producto_id' => 27, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-miski.jpg'],

            // OPERATIVOS - PORTICO
            ['producto_id' => 28, 'pro_imagen_default' => 'visso-escritorio-operativos-linea-portico.jpg'],

            // PRESIDENCIALES - DUCON
            ['producto_id' => 29, 'pro_imagen_default' => 'visso-escritorio-presidenciales-ducon.jpg'],
            ['producto_id' => 29, 'pro_imagen_default' => 'visso-escritorio-presidenciales-ducon-gerencial-dukon_0011_prv.jpg'],
            ['producto_id' => 29, 'pro_imagen_default' => 'visso-escritorio-presidenciales-ducon-ducon2.jpg'],

            // MESSA REUNION
            // ACCORDO
            ['producto_id' => 30, 'pro_imagen_default' => 'visso-messa-reunion-accord.jpg'],
            ['producto_id' => 30, 'pro_imagen_default' => 'visso-messa-reunion-accordo-accordo-en-poliuretano.jpg'],
            ['producto_id' => 30, 'pro_imagen_default' => 'visso-messa-reunion-accordo-accordo-enchapada-en-madera.jpg'],

            // ACTIVA
            ['producto_id' => 31, 'pro_imagen_default' => 'visso-messa-reunion-activa.jpg'],
            ['producto_id' => 31, 'pro_imagen_default' => 'visso-messa-reunion-activa-activa-2.jpg'],

            // AVANTI
            ['producto_id' => 32, 'pro_imagen_default' => 'visso-messa-reunion-avanti.jpg'],
            ['producto_id' => 32, 'pro_imagen_default' => 'visso-messa-reunion-avanti-avanti_0011_prv.jpg'],

            // CIRCULAR
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-messa-reunion-circular.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-messa-reunion-circular-impulsa-larga.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-messa-reunion-circular-impulsa-corta.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-messa-reunion-circular-circular-de-melamina.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-messa-reunion-circular-archimede-image-6.jpg'],
            ['producto_id' => 33, 'pro_imagen_default' => 'visso-messa-reunion-circular-13.jpg'],

            // INIZIO
            ['producto_id' => 34, 'pro_imagen_default' => 'visso-messa-reunion-inizio.jpg'],
            ['producto_id' => 34, 'pro_imagen_default' => 'visso-messa-reunion-inizio-mesa-inizio-de-poliuretano.jpg'],
            ['producto_id' => 34, 'pro_imagen_default' => 'visso-messa-reunion-inizio-mesa-inizio-de-formica.jpg'],

            // OVALADAS
            ['producto_id' => 35, 'pro_imagen_default' => 'visso-messa-reunion-ovaladas.jpg'],
            ['producto_id' => 35, 'pro_imagen_default' => 'visso-messa-reunion-ovaladas-mesa-ovalada-patas-de-melamina.jpg'],

            // REBATIBLES
            ['producto_id' => 36, 'pro_imagen_default' => 'visso-messa-reunion-rebatible.jpg'],
            ['producto_id' => 36, 'pro_imagen_default' => 'visso-messa-reunion-rebatible-mesa-rebatible-2.jpg'],

            // IMPULSA
            ['producto_id' => 37, 'pro_imagen_default' => 'visso-messa-reunion-impulsa.jpg'],
            ['producto_id' => 37, 'pro_imagen_default' => 'visso-messa-reunion-impulsa-impulsa-larga.jpg'],
            ['producto_id' => 37, 'pro_imagen_default' => 'visso-messa-reunion-impulsa-impulsa-corta.jpg'],

            // INTEGRA
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonimica-gerenciales-Integra2.jpg'],
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonimica-gerenciales-Integra1.jpg'],
            ['producto_id' => 38, 'pro_imagen_default' => 'visso-silloneria-ergonimica-gerenciales-Integra3.jpg'],

            // CONSIGUIERI ALTA
            ['producto_id' => 39, 'pro_imagen_default' => 'visso-silloneria-consiglierialta.jpg'],
            ['producto_id' => 39, 'pro_imagen_default' => 'visso-silloneria-consiglierialta-class-alta-1552.jpg'],
            ['producto_id' => 39, 'pro_imagen_default' => 'visso-silloneria-consiglierialta-class-alta-1535.jpg'],

            // CONSIGUIERI BAJA
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-consiglieribaja-baja.jpg'],
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-consiglieribaja-manager-baja-1510.jpg'],
            ['producto_id' => 40, 'pro_imagen_default' => 'visso-silloneria-consiglieribaja-manager-baja-1514.jpg'],

            // CONSIGLIERI TRINEO
            ['producto_id' => 42, 'pro_imagen_default' => 'visso-silloneria-consiglieri-trineo.jpg'],

            // GURU ALTA
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-gurualta.jpg'],
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-gurualta-manager-alta-4.jpg'],
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-gurualta-manager-alta-3.jpg'],
            ['producto_id' => 41, 'pro_imagen_default' => 'visso-silloneria-gurualta-manager-alta-1.jpg'],

            // GURU BAJA
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-gurubaja.jpg'],
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-gurubaja-manager-baja-1467.jpg'],
            ['producto_id' => 43, 'pro_imagen_default' => 'visso-silloneria-gurubaja-manager-baja-1465.jpg'],

            // GURÚ TRINEO
            ['producto_id' => 44, 'pro_imagen_default' => 'visso-silloneria-guru-trineo.jpg'],

            // CLIO
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio1.jpg'],
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio2.jpg'],
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio3.jpg'],
            ['producto_id' => 45, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-clio-clio4.jpg'],

            // CLIO CAJERA
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA3.jpg'],
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA1.jpg'],
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA2.jpg'],
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA4.jpg'],
            ['producto_id' => 46, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-cliocajera-CLIO-CAJERA5.jpg'],

            // CONFORT
            ['producto_id' => 47, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort1.jpg'],
            ['producto_id' => 47, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort2.jpg'],
            ['producto_id' => 47, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort3.jpg'],
            ['producto_id' => 47, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-confort-confort4.jpg'],

            // CONFORT BASE ALUMINIO
            ['producto_id' => 48, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio1.jpg'],
            ['producto_id' => 48, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio2.jpg'],
            ['producto_id' => 48, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio3.jpg'],
            ['producto_id' => 48, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio4.jpg'],
            ['producto_id' => 48, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-comfort-base-aluminio5.jpg'],

            // GUIATTA
            ['producto_id' => 49, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta2.jpg'],
            ['producto_id' => 49, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta1.jpg'],
            ['producto_id' => 49, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta3.jpg'],
            ['producto_id' => 49, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-guiatta4.jpg'],

            // GUIATTA ALUMINIO
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio1.jpg'],
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio2.jpg'],
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio3.jpg'],
            ['producto_id' => 50, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-guiatta-base aluminio4.jpg'],

            // SMART
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart1.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart2.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart3.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart4.jpg'],
            ['producto_id' => 51, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-smart5.jpg'],

            // SMART BASE ALUMINIO
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio1.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio2.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio3.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio4.jpg'],
            ['producto_id' => 52, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio5.jpg'],

            // SMART ALUMINIO CABECERA
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera1.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera2.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera3.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera4.jpg'],
            ['producto_id' => 53, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-smart-base-aluminio-cabecera5.jpg'],

            // SENIOR
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior1.jpg'],
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior2.jpg'],
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior3.jpg'],
            ['producto_id' => 54, 'pro_imagen_default' => 'visso-silloneria-ergonomica-operativos-senior-senior4.jpg'],

            // BUTTERFLY
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-butterfly-1.jpg'],
            ['producto_id' => 55, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-butterfly-2.jpg'],

            // ISO CARPETA
            ['producto_id' => 56, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isocarpeta-2.jpg'],
            ['producto_id' => 56, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isocarpeta-1.jpg'],

            // LÍNEA ISO
            ['producto_id' => 57, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-iso-3.jpg'],
            ['producto_id' => 57, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-iso-2.jpg'],
            ['producto_id' => 57, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-iso-1.jpg'],

            // LINEA ISO CON BRAZO
            ['producto_id' => 58, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO2.jpg'],
            ['producto_id' => 58, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO1.jpg'],
            ['producto_id' => 58, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO3.jpg'],
            ['producto_id' => 58, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-isoconbrazo-ISO-CON-BRAZO4.jpg'],

            // STEP MALLA
            ['producto_id' => 59, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla4.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla1.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla2.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla3.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla5.jpg'],
            ['producto_id' => 59, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-malla-stepmalla6.jpg'],

            // STEP TAPIZADA
            ['producto_id' => 60, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ5.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ1.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ2.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ3.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ4.jpg'],
            ['producto_id' => 60, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-step-tapiz-STEPTAPIZ6.jpg'],

            // VERSA
            ['producto_id' => 61, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa5.jpg'],
            ['producto_id' => 61, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa1.jpg'],
            ['producto_id' => 61, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa2.jpg'],
            ['producto_id' => 61, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa3.jpg'],
            ['producto_id' => 61, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-versa4.jpg'],

            // FLIP
            ['producto_id' => 62, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip4.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip1.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip2.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip3.jpg'],
            ['producto_id' => 62, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-flip5.jpg'],

            // UP
            ['producto_id' => 63, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up5.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up1.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up2.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up3.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up4.jpg'],
            ['producto_id' => 63, 'pro_imagen_default' => 'visso-silloneria-ergonomica-visita-up-up6.jpg'],
            // ['producto_id' => 4, 'pro_imagen_default' => '.jpg'],

            // AMADEUS
            ['producto_id' => 67, 'pro_imagen_default' => 'aresline-amadeus-02.jpg'],
            ['producto_id' => 67, 'pro_imagen_default' => 'aresline-amadeus-03.jpg'],
            ['producto_id' => 67, 'pro_imagen_default' => 'aresline-amadeus-01.jpg'],
            ['producto_id' => 67, 'pro_imagen_default' => 'aresline-amadeus-04.jpg'],
            ['producto_id' => 67, 'pro_imagen_default' => 'aresline-amadeus-05.jpg'],

            // LINK-XPLUS
            ['producto_id' => 68, 'pro_imagen_default' => 'aresline-xplus-02.jpg'],
            ['producto_id' => 68, 'pro_imagen_default' => 'aresline-xplus-03.jpg'],
            ['producto_id' => 68, 'pro_imagen_default' => 'aresline-xplus-04.jpg'],
            ['producto_id' => 68, 'pro_imagen_default' => 'aresline-xplus-01.jpg'],

            // PARLAMENT
            ['producto_id' => 69, 'pro_imagen_default' => 'aresline-parlament-02.jpg'],
            ['producto_id' => 69, 'pro_imagen_default' => 'aresline-parlament-03.jpg'],
            ['producto_id' => 69, 'pro_imagen_default' => 'aresline-parlament-04.jpg'],
            ['producto_id' => 69, 'pro_imagen_default' => 'aresline-parlament-01.jpg'],

            // PF3
            ['producto_id' => 70, 'pro_imagen_default' => 'aresline-PF3-01.jpg'],
            ['producto_id' => 70, 'pro_imagen_default' => 'aresline-PF3-03.jpg'],
            ['producto_id' => 70, 'pro_imagen_default' => 'aresline-PF3-04.jpg'],
            ['producto_id' => 70, 'pro_imagen_default' => 'aresline-PF3-02.jpg'],
            ['producto_id' => 70, 'pro_imagen_default' => 'aresline-PF3-05.jpg'],

            // XTEN
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-xten-01.jpg'],
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-xten-03.jpg'],
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-xten-04.jpg'],
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-xten-02.jpg'],

            // TRENDY
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-trendy-01.jpg'],
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-trendy-03.jpg'],
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-trendy-04.jpg'],
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-trendy-02.jpg'],
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-trendy-05.jpg'],

        	// Boisere
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri-mobiliario-boilere.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri_boisere_2.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri_boisere_3.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri_boisere_4.jpg'],
        	['producto_id' => 73, 'pro_imagen_default' => 'quadri_boisere_5.jpg'],

        	//t45
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_2.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_3.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_4.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_5.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_6.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_7.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_8.jpg'],
        	['producto_id' => 74, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_9.jpg'],

        	// X7
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_2.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_3.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_4.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_5.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_6.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_7.jpg'],
        	['producto_id' => 75, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_8.jpg'],

        	// X8
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x8.jpg'],
        	['producto_id' => 76, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x8_2.jpg'],

        	// XTIME-WORK
        	['producto_id' => 77, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework.jpg'],
        	['producto_id' => 77, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_2.jpg'],
        	['producto_id' => 77, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_3.jpg'],
        	['producto_id' => 77, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_4.jpg'],

        	// Z2
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_2.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_3.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_4.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_5.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_6.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_7.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_8.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_9.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_10.jpg'],
        	['producto_id' => 78, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_11.jpg'],

        	// SIt stand
        	['producto_id' => 79, 'pro_imagen_default' => 'quadri-mobiliario-operativos-sit-stand_2.jpg'],
        	['producto_id' => 79, 'pro_imagen_default' => 'quadri-mobiliario-operativos-sit-stand.jpg'],

        	// System
        	['producto_id' => 80, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system.jpg'],
        	['producto_id' => 80, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_2.jpg'],
        	['producto_id' => 80, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_3.jpg'],
        	['producto_id' => 80, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_4.jpg'],

        	// X2
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_2.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_3.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_4.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_5.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_6.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_7.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_8.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_9.jpg'],
        	['producto_id' => 81, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_10.jpg'],

        	// X4
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_2.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_3.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_4.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_5.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_6.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_7.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_8.jpg'],
        	['producto_id' => 82, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4_9.jpg'],

        	// X7
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_2.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_3.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_4.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_5.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_6.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_7.jpg'],
        	['producto_id' => 83, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7_8.jpg'],

        	// X8
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_2.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_3.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_4.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_5.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_6.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_7.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_8.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_9.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_10.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_11.jpg'],
        	['producto_id' => 84, 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8_12.jpg'],

        	// Direccionales
        	['producto_id' => 85, 'pro_imagen_default' => 'quadri-sillas-direccionales.jpg'],
        	['producto_id' => 86, 'pro_imagen_default' => 'quadri-sillas-direccionales_2.jpg'],
        	['producto_id' => 87, 'pro_imagen_default' => 'quadri-sillas-direccionales_3.jpg'],
        	['producto_id' => 88, 'pro_imagen_default' => 'quadri-sillas-direccionales_4.jpg'],

        	// Operativos
        	['producto_id' => 89, 'pro_imagen_default' => 'quadri-sillas-reunion-cove.jpg'],
        	['producto_id' => 90, 'pro_imagen_default' => 'quadri-sillas-reunion-cove_2.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-sillas-reunion-cove_3.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-sillas-reunion-cove_4.jpg'],
        ];

        foreach ($galery as $key) {
        	Galeria::create($key);
        }
    }
}
