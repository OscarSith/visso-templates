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
				'proy_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'proy_thumb_imagen' => 'thumb_4life_2015.jpg',
				'proy_imagen_default' => '4life_2.jpg',
				'proy_logotipo' => 'logotipo_4life.png',
				'proy_galeria' => '["4life_1.jpg","4life_2.jpg","4life_3.jpg","4life_4.jpg"]',
			],
			[
				'proy_nombre' => 'APM Terminals',
				'proy_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'proy_thumb_imagen' => 'thumb_apm.jpg',
				'proy_imagen_default' => 'apm_1.jpg',
				'proy_logotipo' => 'logotipo_apm.png',
				'proy_galeria' => '["apm_1.jpg","apm_2.jpg","apm_3.jpg","apm_4.jpg"]',
			],
			[
				'proy_nombre' => 'Proyecto Bolsa de Valores de Lima',
				'proy_descripcion' => '<p>Características</p><p>Proyecto de Amoblamiento Integral: Diseño arquitectónico y de diseño de interiores. Instalación de alfombras, cielo raso, mamparas de vidrio, puertas, cableado eléctrico y da data. Amoblamiento.</p><p>Para el amoblamiento se utilizaron las siguientes líneas:</p><p>Línea Abaco.<br>Sillas giratorias modelo Smart.<br>Sillas giratorias modelo Confort.<br>Sillas de visita modelo Step.<br>Mesas de reuniones.<br>Credenzas, armarios y muebles aéreos.<br></p><p>140 puestos de trabajo<br>Área de la oficina: 1,000 m2</p>',
				'proy_thumb_imagen' => 'thumb_bvl.jpg',
				'proy_imagen_default' => 'bvl_1.jpg',
				'proy_logotipo' => 'logotipo_bvl.png',
				'proy_galeria' => '["bvl_1.jpg","bvl_2.jpg","bvl_3.jpg","bvl_4.jpg"]',
			],
			[
				'proy_nombre' => 'HUAWEI',
				'proy_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'proy_thumb_imagen' => 'thumb_huawei.jpg',
				'proy_imagen_default' => 'huawei_1.jpg',
				'proy_logotipo' => 'logotipo_huawei.png',
				'proy_galeria' => '["huawei_1.jpg","huawei_2.jpg","huawei_3.jpg","huawei_4.jpg"]',
			],
			[
				'proy_nombre' => 'SERFOR',
				'proy_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'proy_thumb_imagen' => 'thumb_serfor.jpg',
				'proy_imagen_default' => 'serfir_1.jpg',
				'proy_logotipo' => 'logotipo_serfor.png',
				'proy_galeria' => '["serfir_1.jpg","serfir_2.jpg","serfir_3.jpg","serfir_4.jpg"]',
			],
			[
				'proy_nombre' => 'Proyecto STEVIA ONE',
				'proy_descripcion' => '<p>Características</p><p>Proyecto de Amoblamiento:</p><p>Se utilizaron las siguientes líneas:</p><p>Línea Abaco<br>Sillas giratorias Smart<br>Mesas de reunión circulares<br>Torres de almacenamiento.</p><p>60 puestos de trabajo<br>Área de la oficina: 600 m2</p>',
				'proy_thumb_imagen' => 'thumb_steviaone.jpg',
				'proy_imagen_default' => 'steviaone_1.jpg',
				'proy_logotipo' => 'logotipo_steviaone.png',
				'proy_galeria' => '["steviaone_1.jpg","steviaone_2.jpg","steviaone_3.jpg","steviaone_4.jpg"]',
			],
			[
				'proy_nombre' => 'Proyecto Euroestudios',
				'proy_descripcion' => '<p>Características</p><p>Proyecto de Amoblamiento Integral: instalación de alfombras, cielo raso, cableado eléctrico y de datos.</p><p>Se utilizaron las siguientes líneas:</p><p>Línea Adapta<br>Sillas giratorias Guiatta</p>',
				'proy_thumb_imagen' => 'thumb_eurostudio.jpg',
				'proy_imagen_default' => 'eurostudio_1.jpg',
				'proy_logotipo' => 'logotipo_euroestudio.jpg',
				'proy_galeria' => '["eurostudio_1.jpg","eurostudio_2.jpg","eurostudio_3.jpg","eurostudio_4.jpg"]',
			],
			[
				'proy_nombre' => 'DIARIO EL TIEMPO',
				'proy_descripcion' => '<p>Características</p><p>Proyecto de Amoblamiento Integral: instalación de alfombras, cielo raso, cableado eléctrico y de datos.</p><p>Se utilizaron las siguientes líneas:</p><p>Línea Adapta<br>Sillas giratorias Guiatta</p>',
				'proy_thumb_imagen' => 'thumb_diario.jpg',
				'proy_imagen_default' => 'diario_1.jpg',
				'proy_logotipo' => 'logotipo_diario.jpg',
				'proy_galeria' => '["diario_1.jpg","diario_2.jpg","diario_3.jpg","diario_4.jpg"]',
			],
			[
				'proy_nombre' => 'TSOFT',
				'proy_descripcion' => '<p>Características</p><p>Proyecto de Amoblamiento Integral: instalación de alfombras, cielo raso, cableado eléctrico y de datos.</p><p>Se utilizaron las siguientes líneas:</p><p>Línea Adapta<br>Sillas giratorias Guiatta</p>',
				'proy_thumb_imagen' => 'thumb_tsoft.jpg',
				'proy_imagen_default' => 'tsoft_1.jpg',
				'proy_logotipo' => 'logotipo_tsoft.jpg',
				'proy_galeria' => '["tsoft_1.jpg","tsoft_2.jpg","tsoft_3.jpg"]',
			]
		];

		foreach ($proyectos as $key) {
			Proyecto::create($key);
		}
    }
}
