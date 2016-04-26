<?php

use Illuminate\Database\Seeder;
use App\Proyecto;

class ProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proyectos = [
			[
				'proy_nombre' => '4LIFE - 2015',
				'proy_descripcion' => '<p>2015<br>40 Puestos de Trabajo Instalados.<br>Línea de Mobiliario ABACO y QUADRA<br>Silloneria: Smart, Clio, Movie.<br>Muebles especiales.</p>',
				'proy_thumb_imagen' => 'thumb_4life_2015.jpg',
				'proy_imagen_default' => '4life_2.jpg',
				'proy_logotipo' => 'logotipo_4life.png',
				'proy_galeria' => '["4life_1.jpg","4life_2.jpg","4life_3.jpg","4life_4.jpg"]',
			],
			[
				'proy_nombre' => 'APM Terminals',
				'proy_descripcion' => '<p>2015<br>600 Puestos de Trabajo Instalados.<br>Línea de Mobiliario QUADRA.<br>Silloneria: Consiglieri, Confort , Step malla.<br>Archivadores Móviles.</p>',
				'proy_thumb_imagen' => 'thumb_apm.jpg',
				'proy_imagen_default' => 'apm_1.jpg',
				'proy_logotipo' => 'logotipo_apm.png',
				'proy_galeria' => '["apm_1.jpg","apm_2.jpg","apm_3.jpg","apm_4.jpg"]',
			],
			[
				'proy_nombre' => 'Proyecto Bolsa de Valores de Lima',
				'proy_descripcion' => '<p>2015<br>140 Puestos de Trabajo Instalados.<br>Línea de Mobiliario ABACO.<br>Silloneria: Smart, Confort , Step malla.<br>Mesas de Reuniones: circulares y Targa.</p>',
				'proy_thumb_imagen' => 'thumb_bvl.jpg',
				'proy_imagen_default' => 'bvl_1.jpg',
				'proy_logotipo' => 'logotipo_bvl.png',
				'proy_galeria' => '["bvl_1.jpg","bvl_2.jpg","bvl_3.jpg","bvl_4.jpg"]',
			],
			[
				'proy_nombre' => 'HUAWEI',
				'proy_descripcion' => '<p>2014<br>300 Puestos de Trabajo Instalados.<br>Línea de Mobiliario: PANELES, GEO.<br>Silloneria: Rudy.<br>Muebles especiales.</p>',
				'proy_thumb_imagen' => 'thumb_huawei.jpg',
				'proy_imagen_default' => 'huawei_1.jpg',
				'proy_logotipo' => 'logotipo_huawei.png',
				'proy_galeria' => '["huawei_1.jpg","huawei_2.jpg","huawei_3.jpg","huawei_4.jpg"]',
			],
			[
				'proy_nombre' => 'SERFOR',
				'proy_descripcion' => '<p>2016<br>450 Puestos de Trabajo Instalados.<br>Línea de Mobiliario GEO<br>Silloneria: Confort , Step tapizadas y Butterfly.<br>Mesas de Reuniones Impulsa<br>Archivadores Móviles.</p>',
				'proy_thumb_imagen' => 'thumb_serfor.jpg',
				'proy_imagen_default' => 'serfir_1.jpg',
				'proy_logotipo' => 'logotipo_serfor.png',
				'proy_galeria' => '["serfir_1.jpg","serfir_2.jpg","serfir_3.jpg","serfir_4.jpg"]',
			],
			[
				'proy_nombre' => 'Proyecto STEVIA ONE',
				'proy_descripcion' => '<p>2015<br>60 Puestos de Trabajo Instalados.<br>Línea de Mobiliario ABACO<br>Silloneria: Smart.</p>',
				'proy_thumb_imagen' => 'thumb_steviaone.jpg',
				'proy_imagen_default' => 'steviaone_1.jpg',
				'proy_logotipo' => 'logotipo_steviaone.png',
				'proy_galeria' => '["steviaone_1.jpg","steviaone_2.jpg","steviaone_3.jpg","steviaone_4.jpg"]',
			],
			[
				'proy_nombre' => 'DIARIO EL TIEMPO',
				'proy_descripcion' => '<p>2015<br>100 Puestos de Trabajo Instalados.<br>Línea de Mobiliario ABACO, SEPARADORES PORTA ACCESORIOS.<br>Silloneria: Clio.</p>',
				'proy_thumb_imagen' => 'thumb_diario.jpg',
				'proy_imagen_default' => 'diario_1.jpg',
				'proy_logotipo' => 'logotipo_diario.jpg',
				'proy_galeria' => '["diario_1.jpg","diario_2.jpg","diario_3.jpg","diario_4.jpg"]',
			],
			[
				'proy_nombre' => 'TSOFT',
				'proy_descripcion' => '<p>2014<br>100 Puestos de Trabajo Instalados.<br>Línea de Mobiliario GEO RECTO y MISKI.<br>Silloneria: Smart, Clio.</p>',
				'proy_thumb_imagen' => 'thumb_tsoft.jpg',
				'proy_imagen_default' => 'tsoft_1.jpg',
				'proy_logotipo' => 'logotipo_tsoft.jpg',
				'proy_galeria' => '["tsoft_1.jpg","tsoft_2.jpg","tsoft_3.jpg"]',
			],
			[
				'proy_nombre' => 'ANSALDO SIGNALLING AND TRANSPORTATION SYSTEMS (STS)',
				'proy_descripcion' => '<p>2016<br>100 Puestos de Trabajo Instalados<br>Línea de Mobiliario ABACO, T45, PANELES<br>Silloneria: CLIO</p>',
				'proy_thumb_imagen' => 'thumb_ansaldo_1.jpg',
				'proy_imagen_default' => 'ansaldo_1.jpg',
				'proy_logotipo' => '',
				'proy_galeria' => '["ansaldo_1.jpg","ansaldo_2.jpg","ansaldo_3.jpg","ansaldo_4.jpg","ansaldo_5.jpg","ansaldo_6.jpg","ansaldo_7.jpg"]',
			]
		];

		foreach ($proyectos as $key) {
			Proyecto::create($key);
		}
    }
}
