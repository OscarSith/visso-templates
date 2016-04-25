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
        	// ACCESORIOS -> 7
            ['cat_id' => 1, 'pro_nombre' => 'ACCESORIOS PARA VALLAS', 'pro_descripcion' => '<p>La valla con regla porta accesorios es una solucion funcional y ergonomica, que permite montar accesorios porta utiles, porta hojas ademas de un porta monitor de 01 o 02 articulaciones.</p><p>La valla cuenta ademas con un panel de corcho tapizado el cual permite tener a la mano sus documentos mas importantes.</p><p>Los 20 colores de melamina disponibles y los 10 tonos de tela que manejamos ponen a su disposicion 200 diferentes combinaciones.</p>', 'pro_imagen_default' => 'visso-accesorios-para-vallas.jpg'],
            ['cat_id' => 1, 'pro_nombre' => 'APOYA PIES', 'pro_descripcion' => '<p>Los apoya pies mejoran el confort del usuario y contribuyen a la ergonomía de las estaciones de trabajo.</p><p>Los dos modelos presentados con una bandeja o una barra, pueden ser adaptados para adaptarse a diferentes morfologías y asegurar una mejor posición del cuerpo.</p><p>Tanto la bandeja como la barra pueden ser posicionadas en 3 niveles distintos simplemente moviendo los lados triangulares en 20°, 30° o 40°.</p>', 'pro_imagen_default' => 'visso-accesorios-apoya-pies.jpg'],
            ['cat_id' => 1, 'pro_nombre' => 'PORTA CPUS', 'pro_descripcion' => '<p>El soporte cuenta con una pista de deslizamiento y giro para CPU vertical ofreciendo una dimensión ergonómica adicional en comparación con los soportes tradicionales.</p><p>Puede girar 360 grados alrededor de su eje y deslizarse hacia delante o hacia atrás más de 200 mm.</p><p>El CPU se mantiene en su lugar mediante 2 correas elásticas.</p>', 'pro_imagen_default' => 'visso-accesorios-porta-cpu.jpg'],
            ['cat_id' => 1, 'pro_nombre' => 'PORTA MONITORES', 'pro_descripcion' => '<p>El brazo monitor combina un diseño elegante y moderno, con fuertes características técnicas para mejorar la ergonomía en el puesto de trabajo.</p><p>Desarrollado con un mecanismo de contrapeso innovador y fiable (muelle ajustable probado a través de 30000 ciclos), es compatible con cualquier monitor, ya que con una verdadera fuerza constante, asegura un desplazamiento suave a través de todo el rango de movimiento.</p><p>La selección de un ángulo y una distancia de visión adecuada al monitor evitan la incomodidad postural y reduce la fatiga visual. El brazo cuenta con una instalación VESA rápida (compatible con 75 y 100mm) que rota fácilmente de manera vertical u horizontal. </p><p>Este porta monitor está hecho de acero, aluminio y ABS de un 37% de materiales reciclados logrando que el 99% de los materiales sean reciclables.</p>', 'pro_imagen_default' => 'visso-accesorios-porta-monitores.jpg'],
            ['cat_id' => 1, 'pro_nombre' => 'VALLAS 3 EN 1', 'pro_descripcion' => '<p>Innovador Sistema 3-en-1 de diseño limpio y funcional que permite la implementación de accesorios, lámparas y brazos de monitor.</p><p>Los accesorios Newport, se encargan de transformar el escritorio en una estación de trabajo personalizada y funcional, creando un espacio de trabajo mucho mas libre pero siempre manteniendo los útiles esenciales a tu alcance.</p>', 'pro_imagen_default' => 'visso-accesorios-valla-3-en-1.jpg'],

        	// ALMACENAMIENTO
            //  Armario
        	['cat_id' => 7, 'pro_nombre' => 'GERENCIALES', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Armarios medios utilizados dentro de la configuracion de oficina abierta.</p><p>Ademas de su caracteristica de almacenamiento, sirve como separador y delimitador de espacios.</p><p>Puertas en melamina o vidrio o con marco de aluminio.</p><p>18 colores disponibles.</p><p>Dimension estandar: 1.20 m. de alto x 0.90 m. de ancho x 0.40 m de fando (con puertas)</p>', 'pro_imagen_default' => 'visso-almacenamiento-armario-gerenciales.jpg'],
        	['cat_id' => 7, 'pro_nombre' => 'OPERATIVOS', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Armarios diseñados para cerrar espacios altos y para aprovechar al maximo el espacio disponible en altura de una oficina.</p><p>18 colores disponibles.</p>', 'pro_imagen_default' => 'visso-almacenamiento-armario-operativos.jpg'],

        	// Cajoneras
        	['cat_id' => 8, 'pro_nombre' => 'Archivadores Verticales', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Configuracion: 02, 03, 04 o 05 cajones.<br>18 colores disponibles.</p>', 'pro_imagen_default' => 'visso-almacenamiento-cajoneras-archivadores.jpg'],
            ['cat_id' => 8, 'pro_nombre' => 'Cajoneras Fijas', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Configuraciones:<ul><li>02 cajones estándar.</li><li>03 cajones estándar.</li><li>02 cajones estándar y un cajón de archivo para files de bolsa.</li>18 colores disponibles.</p>', 'pro_imagen_default' => 'visso-almacenamiento-cajoneras-cajonerasfija.jpg'],
            ['cat_id' => 8, 'pro_nombre' => 'Cajoneras Móviles', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Gracias a las ruedas de alta transito, las cajoneras móviles cuentan con una gran flexibilidad de movimiento permitiendo así al usuario disponer de la mejor manera de su espacio disponible.</p><p>Configuraciones:<br><br>- 03 cajones estándar</p>', 'pro_imagen_default' => 'visso-almacenamiento-cajoneras-movil.jpg'],
        	['cat_id' => 8, 'pro_nombre' => 'Porta files de bolsa horizontal', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Porta archivos colgantes de 73 cm. de altura y 84 cm. de ancho.</p>', 'pro_imagen_default' => 'visso-almacenamiento-cajoneras-portahorizontal.jpg'],

        	// Credenza
        	['cat_id' => 9, 'pro_nombre' => 'Alaceneros', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Por lo general sus dimensiones están entre 0.80 y 1.0 m de ancho.</p><p>18 colores de melamina disponibles.</p>', 'pro_imagen_default' => 'visso-almacenamiento-credenzas-almaceneros.jpg'],
            ['cat_id' => 9, 'pro_nombre' => 'Credenza puerta corrediza', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Por lo general sus dimensiones están entre 0.80 y 1.0 m de ancho.<br>18 colores de melamina disponibles.</p>', 'pro_imagen_default' => 'visso-almacenamiento-credenzas-corrediza.jpg'],
            ['cat_id' => 9, 'pro_nombre' => 'Credenza porta documentos', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Por lo general sus dimensiones están entre 0.80 y 1.0 m de ancho.<br>18 colores de melamina disponibles.</p>', 'pro_imagen_default' => 'visso-almacenamiento-credenzas-documentos.jpg'],
            ['cat_id' => 9, 'pro_nombre' => 'Credenza puestas batientes y almacén central', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Por lo general sus dimensiones están entre 0.80 y 1.0 m de ancho.18 colores de melamina disponibles.</p>', 'pro_imagen_default' => 'visso-almacenamiento-credenzas-batientes.jpg'],
            ['cat_id' => 9, 'pro_nombre' => 'Enchapadas de madera', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Credenza gerencial enchapada en madera con acabado brillante o con acabado en pintura de poliuretano.</p><p>Configuraciones disponibles: 03, 04, 05 y 06 puertas.</p><p>Las dimensiones varían entre 1.20 y 2.0 m según el espacio y la configuración deseada por el usuario.</p>', 'pro_imagen_default' => 'visso-almacenamiento-credenzas-enchapados.jpg'],
        	['cat_id' => 9, 'pro_nombre' => 'Credenza mixta', 'pro_descripcion' => '<p>Las dimensiones varían entre 1.0 y 1.20 m según el espacio y la configuración deseada por el usuario.</p><p>Las combinaciones son infinitas, además de la disponibilidad de acabados:  18 colores de melamina, 12 acabados de enchape de madera y pintura de poliuretano.</p>', 'pro_imagen_default' => 'visso-almacenamiento-credenzas-mixta.jpg'],


            // Escritorios
        	// Gerenciales
        	['cat_id' => 10, 'pro_nombre' => 'Delta', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Es una serie gerencial exclusiva que refleja prestigio y representatividad. La sencillez y armonía de sus líneas generan un producto elegante y funcional.</p><p>Dimensiones disponibles: a partir de 1.60 m.</p>', 'pro_imagen_default' => 'visso-escritorios-gerenciales-delta.jpg'],
            ['cat_id' => 10, 'pro_nombre' => 'Quadra Gerencial', 'pro_descripcion' => '<p><strong>Características</strong></p><p>QUADRA es la solución a las necesidades del ejecutivo moderno. La serie ejecutiva QUADRA ofrece varias modalidades de almacenamiento pudiendo escoger entre la cajonera con ruedas, pedestal o credenza lateral.</p><p>Las líneas puras de las patas y el espesor de 24 mm del tablero, le dan al producto la elegancia y robustez que una mesa gerencial debe transmitir.</p><p>De manera opcional  los escritorios van equipados con una bandeja estructural por debajo del sobre donde se alojan todos los cables y permiten ofrecer una imagen de orden con un aspecto impecable.</p>', 'pro_imagen_default' => 'visso-escritorios-gerenciales-quadracredenza1.jpg'],
            // visso-escritorios-gerenciales-quadracredenza.jpg
        	['cat_id' => 10, 'pro_nombre' => 'Targa', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Targa crea entornos cálidos y agradables donde trabajar. Es un puesto flexible y funcional en donde las medidas van de acuerdo a sus hábitos de trabajo y necesidades individuales.</p><p>Las dimensiones y líneas curvas del escritorio proporcionan una sensación de profundidad lo que hace el trabajo agradable y ordenado.</p>', 'pro_imagen_default' => 'visso-escritorios-gerenciales-targa.jpg'],

        	// Operativos
        	['cat_id' => 11, 'pro_nombre' => 'Linea Abaco', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Actual y vanguardista con formas de líneas rectas y simples.</p><p>Su desarrollo, montaje y elegancia la definen como una línea capaz de aportar múltiples soluciones al equipamiento de cada oficina, adaptándose inclusive al entorno arquitectónico de su empresa.</p><p>Especificaciones<br>Apoyo metalico en forma de C, con acabados pintura electroestática de alta resistencia a roces y ralladuras. Tablero de melamina de 18 o 24 mm.</p>', 'pro_imagen_default' => 'visso-escritorios-operativos-abaco.jpg'],
        	['cat_id' => 11, 'pro_nombre' => 'Linea Aster', 'pro_descripcion' => '<p>La línea Aster ha sido diseñada para crear espacios pensados para el trabajo en equipo, sin olvidar las prioridades de cada puesto individual.<br>ASTER le ofrece múltiples posibilidades:</p><p>Crear desde un puesto operativo recto o en L para trabajar exclusivamente con el ordenador, O crear una amplia mesa para el trabajo en equipo.</p>', 'pro_imagen_default' => 'visso-escritorios-operativos-aster.jpg'],
            ['cat_id' => 11, 'pro_nombre' => 'Linea Quadra', 'pro_descripcion' => '<p>Diseño limpio y eficiente que le permitirá crear áreas de trabajo perfectas donde se aprovecha el espacio disponible totalmente.</p>', 'pro_imagen_default' => 'visso-escritorios-operativos-quadra.jpg'],

        	// Presidenciales
        	['cat_id' => 12, 'pro_nombre' => 'Ducon', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Accesorios cromados y enchape de madera natural se combinan de manera perfecta en el escritorio Ducon. Su sobriedad y amplitud le otorgan la personalidad que requiere el escritorio desde el cual se tomaran las decisiones mas importantes de una empresa.</p><p>Medidas disponibles: 2.0 x 2.0 m., 2.0 x 1.80 m., 2.0 x 1.60 m.</p>', 'pro_imagen_default' => 'visso-escritorios-presidenciales-ducon.jpg'],


            // MESA DE REUNION
            ['cat_id' => 4, 'pro_nombre' => 'ACCORDO', 'pro_imagen_default' => 'visso-messa-reunion-accord.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Mesa de reuniones diseñada para siempre llegar a un acuerdo.<br>18 colores de melamina a su disposicion.<br>Puede incluir cableado eléctrico interno y puntos de red.<br>Medidas disponibles:</p>2.40 x 1.10 m. / Capacidad: 08 personas.<br>3.20 x 1.40 m. / Capacidad: 12 personas.<br>4.80 x 1.80 m. / Capacidad: 16 personas.</p>'],
            ['cat_id' => 4, 'pro_nombre' => 'ACTIVA', 'pro_imagen_default' => 'visso-messa-reunion-activa.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Con Activa se consigue una nueva imagen corporativa mediante los acabados de los enchapes en madera y los detalles en acero inoxidable en los soportes.<br>Medidas disponibles:</p>2.40 x 1.10 m. / Capacidad: 08 personas.<br>3.20 x 1.40 m. / Capacidad: 12 personas.<br>4.80 x 1.80 m. / Capacidad: 16 personas.</p>'],
            ['cat_id' => 4, 'pro_nombre' => 'AVANTI', 'pro_imagen_default' => 'visso-messa-reunion-avanti.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Los logros siempre se alcanzan trabajando en equipo.<br>Avanti es una familia de mesas a medida que se fusionan para otorgar una rápida respuesta personalizada a cada espacio de reunión.<br>Enchapada en madera o con acabados en poliuretano.<br>Puede incluir cableado eléctrico interno y puntos de red.</p>'],
            ['cat_id' => 4, 'pro_nombre' => 'CIRCULAR', 'pro_imagen_default' => 'visso-messa-reunion-circular.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Disponibles en base metálica o de melamina.<br>Medidas: 0.80 m., 0.90 m., 1.0 m., 1.10 m., 1.20 m.</p>'],
            ['cat_id' => 4, 'pro_nombre' => 'INIZIO', 'pro_imagen_default' => 'visso-messa-reunion-inizio.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Inizio ha sido diseñada para otorgar ese primer impulso que todo proyecto necesita. Su tablero con terminaciones curvas puede solicitarse en 02 colores.<br>Cuenta con niveladores regulables en altura que mejoran la estabilidad de la mesa.<br>Tablero enchapado en formica de 02 colores.</p><p>Puede incluir cableado eléctrico interno y puntos de red.<br>Medidas disponibles:</p>2.40 x 1.10 m. / Capacidad: 08 personas.<br>3.20 x 1.40 m. / Capacidad: 12 personas.<br>4.80 x 1.80 m. / Capacidad: 16 personas.</p>'],
            ['cat_id' => 4, 'pro_nombre' => 'OVALADAS', 'pro_imagen_default' => 'visso-messa-reunion-ovaladas.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Ideales para atender a clientes, proveedores y para el trabajo. Cubre todas las necesidades de reunión dentro de la empresa.<br>Disponibles a partir de 1.40 m., a elegir entre bases metálicas o de melamina.</p>'],
            ['cat_id' => 4, 'pro_nombre' => 'REBATIBLES', 'pro_imagen_default' => 'visso-messa-reunion-rebatible.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Mesas rebatibles mediante sistema de inclinación con palanca.<br>Ideal para salas de capacitación múltiples en donde el espacio de almacenamiento es un problema o también es usada como puestos de trabajo temporales.<br>Dimensiones: 1.40 m., 1.50 m. de largo.</p>'],
            ['cat_id' => 4, 'pro_nombre' => 'IMPULSA', 'pro_imagen_default' => 'visso-messa-reunion-impulsa.jpg', 'pro_descripcion' => '<p><strong>Características</strong></p><p>Tu equipo de trabajo merece una mesa consecuente con todo su esfuerzo. De forma ovalada y estructura metálica cromada o pintada, Impulsa ha sido diseñada para ofrecer un espacio único de intercambio y creación.</p><p>Disponible a partir de 1.80 m. de largo, puede adicionalmente incluir cableado eléctrico interno y puntos de red.</p>'],


            // SILLONERA ERGONOMICA
        	// Gerenciales
        	['cat_id' => 13, 'pro_nombre' => 'Consiglieri alta', 'pro_descripcion' => '<p>Sillón con asiento y respaldo anatómico tapizado en cuero sintético.</p><p>Consigliere es ideal para liderar y aconsejar cómodamente. Cuenta con brazos de aluminio tapizados en cuero, y amortiguación de peso mediante un pistón neumático.</p><p>Sistema basculante que permite balancear el asiento y respaldo.</p><p>Garantía 03 años de garantía. Cumple el estándar ANSI BIFMA X5.1-2011 que evalúa la seguridad y durabilidad de las sillas.</p>', 'pro_imagen_default' => 'visso-silloneria-consiglierialta.jpg'],
            ['cat_id' => 13, 'pro_nombre' => 'Consiglieri baja', 'pro_descripcion' => '<p>Sillón con asiento y respaldo bajo anatómico tapizado en cuero sintético.</p><p>Consigliere es ideal para liderar y aconsejar cómodamente. Cuenta con brazos de aluminio tapizados en cuero, y amortiguación de peso mediante un pistón neumático.</p><p>Sistema basculante que permite balancear el asiento y respaldo.</p><p>Garantía 03 años de garantía. Cumple el estándar ANSI BIFMA X5.1-2011 que evalúa la seguridad y durabilidad de las sillas.</p>', 'pro_imagen_default' => 'visso-silloneria-consiglieribaja.jpg'],
            ['cat_id' => 13, 'pro_nombre' => 'Guru alta', 'pro_descripcion' => '<p>Sillón de diseño moderno de respaldar alto. Con asiento y respaldo anatómico tapizado en símil cuero.</p><p>Cuenta con sistema basculante que permite balancear el asiento y respaldo.</p><p>Apoya brazos  de aluminio tapizados y altura regulable. Su diseño perdura en el tiempo, como los resultados de las grandes decisiones.</p><p>03 años de garantía. Cumple el estándar ANSI BIFMA X5.1-2011 que evalúa la seguridad y durabilidad de las sillas.</p>', 'pro_imagen_default' => 'visso-silloneria-gurualta.jpg'],
        	['cat_id' => 13, 'pro_nombre' => 'Guru baja', 'pro_descripcion' => '<p>Sillón de diseño moderno de respaldar bajo. Con asiento y respaldo anatómico tapizado en símil cuero.</p><p>Cuenta con sistema basculante que permite balancear el asiento y respaldo.</p><p>Apoya brazos  de aluminio tapizados y altura regulable. Su diseño perdura en el tiempo, como los resultados de las grandes decisiones.</p><p>03 años de garantía. Cumple el estándar ANSI BIFMA X5.1-2011 que evalúa la seguridad y durabilidad de las sillas.</p>', 'pro_imagen_default' => 'visso-silloneria-gurubaja.jpg'],

        	// Operativos
        	['cat_id' => 14, 'pro_nombre' => 'Clio', 'pro_descripcion' => '<ul><li>Respaldar bajo ajustable en altura y tapizado en malla color negro.</li>
<li>Asiento de espuma inyectada de alta duración que garantiza el confort sin deformarse y tapizada con tela importada retardante al fuego.</li>
<li>Asiento con borde en cascada para aliviar la presión ejercida sobre las rodillas.</li>
<li>Base anti vuelcos de nylon reforzado.</li>
<li>Brazos regulables en altura, cumple con la Norma Básica de Ergonomía.</li></ul>', 'pro_imagen_default' => 'visso-silloneria-operativos-clio.jpg'],
            ['cat_id' => 14, 'pro_nombre' => 'Confort', 'pro_descripcion' => '<ul><li>Respaldo medio REGULABLE de malla, que garantiza un alto confort y elegancia gracias a su elasticidad y transpiración.</li>
<li>Mecanismo basculante que permite balancear el respaldar y asiento, regulándose de acuerdo al peso del usuario.</li>
<li>Cuenta con brazos regulables en 03 dimensiones (alto, ancho y profundidad).</li>
<li>Espuma inyectada de alta duración que garantiza el confort sin deformarse y tapizada con tela importada retardante al fuego.</li>
<li>Base anti vuelcos de nylon reforzado, soporta una carga de 1200 kg. sin romperse.</li><li>Base tipo aspa de 5 puntas de polipropileno</li></ul>', 'pro_imagen_default' => 'visso-silloneria-operativos-confort.jpg'],
            ['cat_id' => 14, 'pro_nombre' => 'Guidatta', 'pro_descripcion' => '<ul><li>Silla de respaldar alto tapizado.</li><li>Sistema SYNCRO que permite el movimiento sincronizado del respaldo y el asiento con sistema de bloqueo en la posición deseada, además permite la inclinación independiente del asiento hacia delante o hacia atrás, esto le da total libertad al usuario de configurar la silla a su comodidad.</li><li>Espuma inyectada de alta duración que garantiza el confort sin deformarse y tapizada con tela importada retardante al fuego.</li><li>Novedosos Brazos regulables en : ancho, fondo y altura.</li><li>Base tipo aspa de 5 puntas de polipropileno</li></ul>', 'pro_imagen_default' => 'visso-silloneria-operativos-guiatta.jpg'],
        	['cat_id' => 14, 'pro_nombre' => 'Smart', 'pro_descripcion' => '<ul><li>Respaldo alto REGULABLE de malla garantiza un alto confort y elegancia gracias a su elasticidad y transpiración.</li><li>Mecanismo basculante que permite balancear el respaldar y asiento, regulándose de acuerdo al peso del usuario.</li><li>Cuenta con brazos regulables en 02 dimensiones (alto y ancho).</li><li>Asiento con borde en cascada para aliviar la presión ejercida sobre las rodillas., tapizada con tela importada retardante al fuego.</li><li>Base anti vuelcos de nylon reforzado. Soporta una carga de 1200 kg.</li></ul>', 'pro_imagen_default' => 'visso-silloneria-operativos-smart.jpg'],

        	// Visita
        	['cat_id' => 15, 'pro_nombre' => 'Butterfly', 'pro_descripcion' => '<p>Silla de visita de estructura metálica color aluminio.<br>Respaldo perforado y asiento inyectado en polipropileno de alta resistencia .<br>Disponible en color gris y negro</p>', 'pro_imagen_default' => 'visso-silloneria-visita-butterfly.jpg'],
            ['cat_id' => 15, 'pro_nombre' => 'Iso Carpeta', 'pro_descripcion' => '<ul><li>Silla multipropósitos (visita, capacitación, auditorio) de estructura metálica color negro de alta resistencia.</li><li>Tapizada</li><li>Apilable</li><li>Disponible con brazos, con apoya carpeta y sin brazos.</li>', 'pro_imagen_default' => 'visso-silloneria-visita-isocarpeta.jpg'],
            ['cat_id' => 15, 'pro_nombre' => 'Línea Iso', 'pro_descripcion' => '<p>Silla multipropósitos (visita, capacitación, auditorio) de estructura metálica color negro de alta resistencia.</p><p>Tapizada.</p><p>Apilable</p>', 'pro_imagen_default' => 'visso-silloneria-visita-linea-iso.jpg'],
            ['cat_id' => 15, 'pro_nombre' => 'Step Malla', 'pro_descripcion' => '<ul><li>El diseño y fabricación italiana de la silla Step ofrece confort, robustez, funcionalidad y diseño en un solo modelo de silla.</li><li>Las estructuras  04 patas son cromadas lo cual garantiza su durabilidad en diferente s condiciones de uso.</li><li>Son apilables.</li><li>Respaldo en malla.</li></ul>', 'pro_imagen_default' => 'visso-silloneria-visita-step-malla.jpg'],
            ['cat_id' => 15, 'pro_nombre' => 'Step Tapizada', 'pro_descripcion' => '<ul><li>El diseño y fabricación italiana de la silla Step ofrece confort, robustez, funcionalidad y diseño en un solo modelo de silla.</li><li>Las estructuras  04 patas son cromadas lo cual garantiza su durabilidad en diferente s condiciones de uso.</li><li>Son apilables.</li><li>Respaldo tapizado en tela.</li></ul>', 'pro_imagen_default' => 'visso-silloneria-visita-steptapizada.jpg'],


        	// Sistemas modulares
        	['cat_id' => 6, 'pro_nombre' => 'SISTEMA DE PANELES', 'pro_descripcion' => '<p><strong>Características</strong></p>
<p>Los sistemas de paneles de Visso están diseñados para que cada miembro de tu equipo pueda concentrarse cómodamente dentro de su propio espacio de trabajo.</p><p>Su concepto modular permite modificar las configuración de los espacios, adaptándose a futuros cambios o ampliaciones dentro de su empresa.</p>><p><strong>Beneficios:</strong><p><ul>
<li>Aumentan la productividad: Mediante atmosferas independientes y creativas en ambientes de trabajo sanos y motivadores.</li>
<li>Optimiza el espacio disponible y  Facilita la organización de su empresa.</li>
<li>Mejora enormemente su imagen frente a su cliente.</li><ul>
<p><strong>Especificaciones técnicas:</strong></p>
<ul><li>06 Alturas disponibles: 0.94 m., 1.20 m., 1.34 m. , 1.50 m., 1.74 m. y de piso a techo.</li>
<li>Amplias canaletas para el cableado de voz y data.</li>
<li>Espesor 7.5 cm.</li>
<li>Estructura metálica en acero cold rolled.</li>
<li>Baldosas de tela, enchapadas en madera, formica o vidrio.</li></ul>', 'pro_imagen_default' => 'visso-sistemas-modulares-paneles.jpg'],

        	// Escritorios BENCH
        	['cat_id' => 6, 'pro_nombre' => 'SISTEMAS BENCH', 'pro_descripcion' => '<p><strong>Características</strong></p>
<p>Diseño limpio y eficiente que le permitirá crear áreas de trabajo perfectas donde se aprovecha el espacio disponible totalmente.<br>
Especificaciones:</p>
<ul><li><strong>Tableros:</strong> de 18 o 24 mm.</li>
<li>Estructura metálica: Estructura de acero laminado en frío de 2” con acabados pintura electroestática de alta resistencia a roces y ralladuras.</li>
<li><strong>Regulación:</strong> sistema de regulación de altura en cada pata.</li>
<li><strong>Acabados estructura metálica:</strong> negro, nopal, blanco, gris claro y aluminio.</li>
<li><strong>Separador central:</strong> de melamina o de vidrio o acrílico.</li></ul>', 'pro_imagen_default' => 'visso-sistemas-modulares-bench.jpg'],



            // ARESLINE - AMADEUS
            ['cat_id' => 16, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => '<p>Una silla elegante y con acabados cuidados, también está disponible con el brazo completamente tapizado. La forma, moderna y actual, evoca claros elementos tradicionales, principalmente en la alineación del brazo con el respaldo. Amadeus es la solución perfecta para despachos importantes y salas de espera confortables.</p>', 'pro_imagen_default' => 'aresline-amadeus-02.jpg'],
            ['cat_id' => 16, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => '<p>Una silla elegante y con acabados cuidados, también está disponible con el brazo completamente tapizado. La forma, moderna y actual, evoca claros elementos tradicionales, principalmente en la alineación del brazo con el respaldo. Amadeus es la solución perfecta para despachos importantes y salas de espera confortables.</p>', 'pro_imagen_default' => 'aresline-amadeus-03.jpg'],
            ['cat_id' => 16, 'pro_nombre' => 'Sillas Ergonomica', 'pro_descripcion' => '<p>Una silla elegante y con acabados cuidados, también está disponible con el brazo completamente tapizado. La forma, moderna y actual, evoca claros elementos tradicionales, principalmente en la alineación del brazo con el respaldo. Amadeus es la solución perfecta para despachos importantes y salas de espera confortables.</p>', 'pro_imagen_default' => 'aresline-amadeus-05.jpg'],


            // ARESLINE - LINK-XPLUS
            ['cat_id' => 17, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Importante sillón con prestaciones de confort de nivel absoluto. El alcochado sigue en el respaldo, integrando en un único conjunto, del asiento al apoyacabeza, su línea única y refinada. Mecanismos de regulación de muy alta calidad, diversos tipos de brazos, materiales y acabados de alta gama, nada se deja al azar en este sillón de dirección que une prestaciones y diseño de manera óptima', 'pro_imagen_default' => 'aresline-xplus-02.jpg'],
            ['cat_id' => 17, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => 'Importante sillón con prestaciones de confort de nivel absoluto. El alcochado sigue en el respaldo, integrando en un único conjunto, del asiento al apoyacabeza, su línea única y refinada. Mecanismos de regulación de muy alta calidad, diversos tipos de brazos, materiales y acabados de alta gama, nada se deja al azar en este sillón de dirección que une prestaciones y diseño de manera óptima', 'pro_imagen_default' => 'aresline-xplus-03.jpg'],
            ['cat_id' => 17, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Importante sillón con prestaciones de confort de nivel absoluto. El alcochado sigue en el respaldo, integrando en un único conjunto, del asiento al apoyacabeza, su línea única y refinada. Mecanismos de regulación de muy alta calidad, diversos tipos de brazos, materiales y acabados de alta gama, nada se deja al azar en este sillón de dirección que une prestaciones y diseño de manera óptima', 'pro_imagen_default' => 'aresline-xplus-04.jpg'],


            // ARESLINE - PARLAMENT
            ['cat_id' => 18, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-parlament-02.jpg'],
            ['cat_id' => 18, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pro_imagen_default' => 'aresline-parlament-04.jpg'],

            // ARESLINE - PF3
            ['cat_id' => 19, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => '<p>La colección PF3 presenta un mobiliario completo especialmente diseñado para los salones más exclusivos, con un producto versátil, innovador y a la vez atractivo y cómodo. Una línea de descanso única que expresa una visión original del mundo de la decoración.</p>', 'pro_imagen_default' => 'aresline-pf3-01.jpg'],
            ['cat_id' => 19, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => '<p>La colección PF3 presenta un mobiliario completo especialmente diseñado para los salones más exclusivos, con un producto versátil, innovador y a la vez atractivo y cómodo. Una línea de descanso única que expresa una visión original del mundo de la decoración.</p>', 'pro_imagen_default' => 'aresline-pf3-02.jpg'],
            ['cat_id' => 19, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => '<p>La colección PF3 presenta un mobiliario completo especialmente diseñado para los salones más exclusivos, con un producto versátil, innovador y a la vez atractivo y cómodo. Una línea de descanso única que expresa una visión original del mundo de la decoración.</p>', 'pro_imagen_default' => 'aresline-pf3-03.jpg'],
            ['cat_id' => 19, 'pro_nombre' => 'Escritorios', 'pro_descripcion' => '<p>La colección PF3 presenta un mobiliario completo especialmente diseñado para los salones más exclusivos, con un producto versátil, innovador y a la vez atractivo y cómodo. Una línea de descanso única que expresa una visión original del mundo de la decoración.</p>', 'pro_imagen_default' => 'aresline-pf3-04.jpg'],
            ['cat_id' => 19, 'pro_nombre' => 'Sillas Ergonomica', 'pro_descripcion' => '<p>La colección PF3 presenta un mobiliario completo especialmente diseñado para los salones más exclusivos, con un producto versátil, innovador y a la vez atractivo y cómodo. Una línea de descanso única que expresa una visión original del mundo de la decoración.</p>', 'pro_imagen_default' => 'aresline-pf3-05.jpg'],

            // ARESLINE - TRENDY
            ['cat_id' => 20, 'pro_nombre' => 'Mesa Empresarial', 'pro_descripcion' => '<p>El diseño especial del acolchado del respaldo y la base de aluminio, bruñido o barnizado, exaltan la actualidad de Trendy First Class. Unas preciosas costuras en contraste, hechas a pedido en los tapizados de piel y ecopiel, completan el toque a la moda de esta silla.</p>', 'pro_imagen_default' => 'aresline-trendy-01.jpg'],
            ['cat_id' => 20, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => '<p>El diseño especial del acolchado del respaldo y la base de aluminio, bruñido o barnizado, exaltan la actualidad de Trendy First Class. Unas preciosas costuras en contraste, hechas a pedido en los tapizados de piel y ecopiel, completan el toque a la moda de esta silla.</p>', 'pro_imagen_default' => 'aresline-trendy-02.jpg'],
            ['cat_id' => 20, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => '<p>El diseño especial del acolchado del respaldo y la base de aluminio, bruñido o barnizado, exaltan la actualidad de Trendy First Class. Unas preciosas costuras en contraste, hechas a pedido en los tapizados de piel y ecopiel, completan el toque a la moda de esta silla.</p>', 'pro_imagen_default' => 'aresline-trendy-03.jpg'],

            // ARESLINE - XTEN
            ['cat_id' => 21, 'pro_nombre' => 'Sillas Mod. 1', 'pro_descripcion' => '<p>El estímulo fuerte y continuo propuesto por Pininfarina en términos de investigación tecnológica, soluciones de ingeniería y atención al valor estético del producto, han producido soluciones contemporáneas y avanzadas desde el punto de vista ergonómico.</p>', 'pro_imagen_default' => 'aresline-xten-02.jpg'],
            ['cat_id' => 21, 'pro_nombre' => 'Sillas Mod. 2', 'pro_descripcion' => '<p>El estímulo fuerte y continuo propuesto por Pininfarina en términos de investigación tecnológica, soluciones de ingeniería y atención al valor estético del producto, han producido soluciones contemporáneas y avanzadas desde el punto de vista ergonómico.</p>', 'pro_imagen_default' => 'aresline-xten-03.jpg'],


                // CUADRIFOGLIO - MOBILIARIO - Boisere
                ['cat_id' => 24, 'pro_nombre' => 'BOISERIE', 'pro_descripcion' => '<p>Un nuevo concepto de sistema de almacenamiento que quiere convertirse en un elemento decorativo. Espaldas de melamina, estantes de vidrio, estructuras blanco y cromado: el equilibrio perfecto de las formas geométricas . Gracias a la posibilidad de insertar melamina y puertas de vidrio, Boiserie puede ser abierto o cerrado de almacenamiento, esto depende de usted porque el resultado será siempre un éxito.</p>', 'pro_imagen_default' => 'quadri-mobiliario-boilere.jpg'],

                // CUADRIFOGLIO - MOBILIARIO - Direccionales
                ['cat_id' => 25, 'pro_nombre' => 'T45', 'pro_descripcion' => '<p>T45, un puente entre lo clásico y lo moderno.</p><p>Gracias a la pureza extrema de sus líneas y su fuerte personalidad, la nueva colección T45 confiere a los espacios de oficina una agradable combinación entre estilo, las nuevas tendencias estéticas y las más clásicas, la solidez formal y la funcionalidad.</p><p>Gracias a su diseño minimalista y lineal, T45 se distingue por su unión a 45° entre tablero y estructura y las combinaciones de acabados melamínicos.</p>', 'pro_imagen_default' => 'quadri-mobiliario-direccionales_t45.jpg'],
                ['cat_id' => 25, 'pro_nombre' => 'X7', 'pro_descripcion' => '<ul>
                    <li>Sobres en bilaminado de aglomerado de alta tensión, revestidos con melanina de alta calidad con poro abierto</li>
                    <li>Sobres en cristal extra-blanco templado anti-huella están satinados en la parte superior, barnizados con efecto opaco en la parte inferior</li>
                    <li>Placas de acero inoxidable. Cantos pulidos y esquina biselados a 45°.</li>
                    <li>Patas disponibles en las versiones ‘’abierta’’ y ‘’cerrada’’, fabricadas en perfilado de acero. Incluye pies niveladores.</li>
                    </ul>
                    ', 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x7.jpg'],
                ['cat_id' => 25, 'pro_nombre' => 'X8', 'pro_descripcion' => '<ul>
                        <li>Sobres en bilaminado de aglomerado de alta tensión, revestidos con melanina de alta calidad con poro abierto</li>
                        <li>Antirreflejos, anti-arañazos</li>
                        <li>Sobres en cristal extra-blanco templado anti-huella están satinados en la parte superior, barnizados con efecto opaco en la parte inferior</li>
                        <li>Placas de acero inoxidable. Cantos pulidos y esquina biselados a 45°.</li>
                    </ul>', 'pro_imagen_default' => 'quadri-mobiliario-direccionales_x8.jpg'],
                ['cat_id' => 25, 'pro_nombre' => 'X Time Work', 'pro_descripcion' => '<ul>
                        <li>Sobre realizado en melanina lavable, antirreflejo y anti-arañazos</li>
                        <li>Sobre realizado en cristal templado barnizado, puede ser arqueado o curvo</li>
                        <li>Estructura de melanina, con cantos rectos en ABS anti-golpes a juego y embellecedores regulares en ABS color aluminio
                        </li>
                        <li>Pies niveladores</li>
                    </ul>', 'pro_imagen_default' => 'quadri-mobiliario-direccionales_xtimework.jpg'],


                // Mostradores
                ['cat_id' => 26, 'pro_nombre' => 'Z2', 'pro_descripcion' => '<ul>
    <li>Módulos rectos realizados en tablero aglomerado de partículas de espesor 25mm, revestidos con papel melamínico.</li>
    <li>Lavable, antirreflejos, anti-arañazos</li>
    <li>Acabados blanco, nogal, canaletto y wengué a por semi-abierto con cantos en ABS anti-golpes</li>
    <li>Patas realizadas en tubo de acero trefilado decapado con sección cuadrada</li>
    <li>Sistema de iluminación</li>
</ul>', 'pro_imagen_default' => 'quadri-mobiliario-mostradores-z2.jpg'],

                // Operativos
                ['cat_id' => 27, 'pro_nombre' => 'SIT STAND', 'pro_descripcion' => '<ul>
                        <li>Sobres realizados en tablero aglomerado de partículas de esp. 30mm. Revestido con papel melmaú anti-arañazos.</li>
                        <li>Dos patas en forma de ‘’T’’ invertida con REGULACIÓN DE ALTURA de 67,3 hasta 134,8cm</li>
                        <li>Motor de elevación integrado en el cuerpo de la columna</li>
                    </ul>', 'pro_imagen_default' => 'quadri-mobiliario-operativos.jpg'],
                ['cat_id' => 27, 'pro_nombre' => 'SYSTEM', 'pro_descripcion' => '<p>La armonía de metal, de estilo elegante, sencillo y limpio. El sistema idea+ system capta su atención y combina la estética con la funcionalidad. La estructura metálica está disponible en tres acabados: negro, aluminio y blanco. Los carreteros de metal desmontable permiten la gestión de cables: se puede elegir entre cuatro acabados, negro , aluminio , blanco y cromo . Detalles que hacen atractiva cada entorno de trabajo. La pierna del sistema tiene tres tipos de ajuste de altura para adaptarse mejor a las necesidades del usuario: con el mecanismo de tornillo , con manivela o con motor eléctrico.</p>', 'pro_imagen_default' => 'quadri-mobiliario-operativos-system.jpg'],
                ['cat_id' => 27, 'pro_nombre' => 'X2', 'pro_descripcion' => '<ul>
    <li>Sobres en melanina realizados en tablero aglomerado de partículas de espesor 25-30mm, revestidos con papel melamínico.</li>
    <li>Lavable, antirreflejos, anti-arañazos</li>
    <li>Estructura disponible con barra telescópica en tubo de acero, con faldón estructurral en melanina y con faldón estructural de acero perforado.</li>
    <li>Dotados de canales de electrificación en aluminio extruido barnizados</li>
</ul>', 'pro_imagen_default' => 'quadri-mobiliario-operativos-x2.jpg'],
                ['cat_id' => 27, 'pro_nombre' => 'X4', 'pro_descripcion' => '<ul>
    <li>Sobres en melanina realizados en tablero aglomerado de partículas de espesor 25-30mm, revestidos con papel melamínico.</li>
    <li>Lavable, antirreflejos, anti-arañazos</li>
    <li>Estructuras realizads en tubo de acero laminado en frío disponible en color blanco brillante, aluminio o cromado</li>
    <li>Cuerpo dotado de 8 pies niveladores en ABS. Fondo dotado de 2 pasacables con tapetas en ABS</li>
</ul>', 'pro_imagen_default' => 'quadri-mobiliario-operativos-x4.jpg'],


                ['cat_id' => 28, 'pro_nombre' => 'X7', 'pro_descripcion' => '<ul>
    <li>Bandeja de electrificación con laterales y tapa en aluminio pulido</li>
    <li>Tapones embellecedores en ABS cromado. Tapa abatible se puede abrir en ambos sentidos y está dotada de un cepillo para cables.</li>
    <li>Sobres en bilaminado de aglomerado de alta tensión, revestidos con melanina de alta calidad con poro abierto</li>
    <li>Sobres en cristal extra-blanco templado anti-huella están satinados en la parte superior, barnizados con efecto opaco en la parte inferior</li>
    <li>Placas de acero inoxidable. Cantos pulidos y esquina biselados a 45°.</li>
    <li>Patas disponibles en las versiones ‘’abierta’’ y ‘’cerrada’’, fabricadas en perfilado de acero. Incluye pies niveladores.</li>
</ul>', 'pro_imagen_default' => 'quadri-mobiliario-reunion-x7.jpg'],
                ['cat_id' => 28, 'pro_nombre' => 'X8', 'pro_descripcion' => '<ul>
    <li>Sobres en bilaminado de aglomerado de alta tensión, revestidos con melanina de alta calidad con poro abierto</li>
    <li>Lavable, antirreflejos, anti-arañazos</li>
    <li>Sobres en cristal extra-blanco templado anti-huella están satinados en la parte superior, barnizados con efecto opaco en la parte inferior</li>
    <li>Placas de acero inoxidable. Cantos pulidos y esquina biselados a 45°.</li>
    <li>Tapa abatible puede abrirse en ambos sentidos y está dotada de un cepillo para los cables</li>
</ul>', 'pro_imagen_default' => 'quadri-mobiliario-reunion-x8.jpg'],


            // QUADRIFOGLIO - SILLAS
            ['cat_id' => 23, 'pro_nombre' => 'DIRECCIONALES', 'pro_descripcion' => '<ul><li>Sillón direccional</li><li>Brazos en polipropileno negro, acero cromado revestido y multicapa de haya barnizado natural y pintado color nogal</li><li>Respaldo alto y bajo</li><li>Versiones fijas y oscilantes</li></ul>', 'pro_imagen_default' => 'quadri-sillas-direccionales.jpg'],
            ['cat_id' => 23, 'pro_nombre' => 'OPERATIVOS', 'pro_descripcion' => '<ul><li>Sillón operativo</li><li>Respaldo con y sin reposacabeza, alto y bajo.</li><li>Versión con respaldo alto de red blanca, gris y negra</li><li>Versión con movimiento syncron</li><li>Regulación altura respaldo up/down</li></ul>', 'pro_imagen_default' => 'quadri-sillas-operativos.jpg'],
            ['cat_id' => 23, 'pro_nombre' => 'REUNIÓN', 'pro_descripcion' => '<p>Gama de silleria transversal que, gracias a un diseño que se deshace de todo lo superfluo, destaca la pureza de la silla y su forma sinuosa y envolvente. Carcasa en polipropileno en 6 acabados, resistente y flexible, ofrece no solo un excelente confort, si no también, armonía y soluciones que encajan perfectamente en todo tipo de espacios.</p>', 'pro_imagen_default' => 'quadri-sillas-reunion.jpg'],
            ['cat_id' => 23, 'pro_nombre' => 'SILLONES DE ESPERA', 'pro_descripcion' => '<ul><li>Sillón de espera</li><li>Estructura de poliuretano espumado en frío de molde</li></ul>', 'pro_imagen_default' => 'quadri-sillas-sillones-espera.jpg'],
        ];

        foreach ($productos as $key => $value) {
        	Producto::create($value);
        }
    }
}
