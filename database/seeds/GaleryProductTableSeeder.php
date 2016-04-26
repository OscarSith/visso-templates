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
        	// Boisere
        	['producto_id' => 90, 'pro_imagen_default' => 'quadri-mobiliario-boilere.jpg'],
        	['producto_id' => 90, 'pro_imagen_default' => 'quadri_boisere_2.jpg'],
        	['producto_id' => 90, 'pro_imagen_default' => 'quadri_boisere_3.jpg'],
        	['producto_id' => 90, 'pro_imagen_default' => 'quadri_boisere_4.jpg'],
        	['producto_id' => 90, 'pro_imagen_default' => 'quadri_boisere_5.jpg'],

        	//t45
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_2.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_3.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_4.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_5.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_6.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_7.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_8.jpg'],
        	['producto_id' => 91, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45_9.jpg'],

        	// X7
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_2.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_3.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_4.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_5.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_6.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_7.jpg'],
        	['producto_id' => 92, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7_8.jpg'],

        	// X8
        	['producto_id' => 93, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x8.jpg'],
        	['producto_id' => 93, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x8_2.jpg'],

        	// XTIME-WORK
        	['producto_id' => 94, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework.jpg'],
        	['producto_id' => 94, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_2.jpg'],
        	['producto_id' => 94, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_3.jpg'],
        	['producto_id' => 94, 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework_4.jpg'],

        	// Z2
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_2.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_3.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_4.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_5.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_6.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_7.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_8.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_9.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_10.jpg'],
        	['producto_id' => 95, 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2_11.jpg'],

        	// SIt stand
        	['producto_id' => 96, 'pro_imagen_default' => 'quadri-mobiliario-operativos-sit-stand_2.jpg'],
        	['producto_id' => 96, 'pro_imagen_default' => 'quadri-mobiliario-operativos-sit-stand.jpg'],

        	// System
        	['producto_id' => 97, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system.jpg'],
        	['producto_id' => 97, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_2.jpg'],
        	['producto_id' => 97, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_3.jpg'],
        	['producto_id' => 97, 'pro_imagen_default' => 'quadri-mobiliario-operativos-system_4.jpg'],

        	// X2
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_2.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_3.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_4.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_5.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_6.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_7.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_8.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_9.jpg'],
        	['producto_id' => 98, 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2_10.jpg'],
        ];

        foreach ($galery as $key) {
        	Galeria::create($key);
        }
    }
}
