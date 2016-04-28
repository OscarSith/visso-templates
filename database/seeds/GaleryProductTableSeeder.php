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


            // ['producto_id' => 4, 'pro_imagen_default' => '.jpg'],
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
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-xten-01.jpg'],
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-xten-03.jpg'],
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-xten-04.jpg'],
            ['producto_id' => 71, 'pro_imagen_default' => 'aresline-xten-02.jpg'],

            // TRENDY
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-trendy-01.jpg'],
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-trendy-03.jpg'],
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-trendy-04.jpg'],
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-trendy-02.jpg'],
            ['producto_id' => 72, 'pro_imagen_default' => 'aresline-trendy-05.jpg'],

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
