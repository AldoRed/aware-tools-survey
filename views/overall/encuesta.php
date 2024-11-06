<?php

$encuesta = $encuestas[$key];

// Temporalmente se agrega manualmente el array de preguntas frecuentes
$preguntas = array();
$preguntas["preguntasFrecuentes"] = array(["¿Los datos donde quedan registrados?", "Los registros se almacenan en un archivo csv, el cual puedes descargar <a href='views/docs/resultadosColores.csv'>Aquí</a>"],
                                        ["¿Qué datos serán requeridos?", "Edad, enfermedades que afecten a su visión y sexo"],
                                     ["¿Existe algún requisito para contestar la encuesta?", "No hay requisitos para contestar encuesta."],
                                     ["¿Quiénes somos?", "Somos un grupo de cuatro estudiantes de la Universidad Adolfo Ibañez de Viña del Mar. <b><br> Matthias Dietert.<br> Diego Figueroa.<br> Matias Orozco.<br> Aldo Muñoz.</b>"]);

$formulario = [
    [
        "seccion" => "SECCIÓN A: Preguntas relativas a la investigación realizada por los equipos de investigación en ciberseguridad",
        "preguntas" => [
            [
                "pregunta" => "¿Qué tipo de actividad realiza su equipo de investigación? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Investigación aplicada",
                    "Investigación teórica",
                    "Ambas"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Tiene aplicación, en el campo de la ciberseguridad, el resultado de la actividad investigadora que se está desarrollando actualmente? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Sí, resuelve problemáticas concretas de ciberseguridad",
                    "Sí, se aplica en otros campos además de ciberseguridad",
                    "No, resuelve problemas de ciberseguridad de forma indirecta"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Qué niveles de TRL (Technology Readiness Level) alcanza el equipo normalmente en su acción investigadora? *",
                "tipo" => "radio",
                "alternativas" => [
                    "TRL-1: Principios básicos observados",
                    "TRL-2: Formulación del concepto tecnológico",
                    "TRL-3: Prueba de concepto",
                    "TRL-4: Prototipo a pequeña escala",
                    "TRL-5: Validación del prototipo en entorno relevante",
                    "TRL-6: Prototipo en entorno relevante",
                    "TRL-7: Demostración del sistema en entorno operativo",
                    "TRL-8: Primer sistema de tipo comercial",
                    "TRL-9: Sistema probado y operativo"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Cuánto tiempo lleva el equipo realizando investigación con aplicación en ciberseguridad? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Menos de 2 años",
                    "Entre 2 y 5 años",
                    "Entre 5 y 10 años",
                    "Más de 10 años"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Mencione las regiones en las que está presente (físicamente)",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Región de Arica y Parinacota",
                    "Región de Tarapacá",
                    "Región de Antofagasta",
                    "Región de Atacama",
                    "Región de Coquimbo",
                    "Región de Valparaíso",
                    "Región Metropolitana de Santiago",
                    "Región del Libertador General Bernardo O’Higgins",
                    "Región del Maule",
                    "Región de Ñuble",
                    "Región del Biobío",
                    "Región de La Araucanía",
                    "Región de Los Ríos",
                    "Región de Los Lagos",
                    "Región de Aysén del General Carlos Ibáñez del Campo",
                    "Región de Magallanes y de la Antártica Chilena"
                ],
                "obligatorio" => false
            ]
        ]
    ],
    [
        "seccion" => "SECCIÓN B: Preguntas relativas a las características y propiedades de los equipos de investigación",
        "preguntas" => [
            [
                "pregunta" => "¿En qué categoría enmarcaría a su equipo de investigación? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Universidad pública",
                    "Universidad privada",
                    "Centro de investigación",
                    "Empresa privada",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Qué tamaño tiene el equipo actualmente (personal propio + personal contratado) en número de investigadores? *",
                "tipo" => "radio",
                "alternativas" => [
                    "1-5 investigadores",
                    "6-10 investigadores",
                    "11-15 investigadores",
                    "Más de 15 investigadores"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Cantidad de mujeres en investigación (aproximado porcentaje)",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Se han identificado necesidades de incremento de personal para mejorar las capacidades del equipo de investigación? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Sí",
                    "No"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Qué tipo de personal conforma el equipo de investigación? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Doctorandos",
                    "Doctores con menos de 6 años de experiencia",
                    "Doctores con más de 6 años de experiencia",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Qué perfiles encajan mejor con las necesidades del equipo de investigación? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Doctorandos",
                    "Doctores noveles",
                    "Investigadores senior",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Indique posibles ayudas a la contratación que actualmente estén disfrutando los componentes del equipo de investigación",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Cuál sería la duración mínima de los contratos que considera idónea, en caso de recibir ayudas para contratar doctorandos? *",
                "tipo" => "radio",
                "alternativas" => [
                    "1 año",
                    "2 años",
                    "3 años",
                    "Más de 3 años"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Y para los doctores noveles? *",
                "tipo" => "radio",
                "alternativas" => [
                    "1 año",
                    "2 años",
                    "3 años",
                    "Más de 3 años"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Considera que la cuantía de la ayuda debería cubrir el 100% del coste del investigador para que su equipo de investigación pudiera optar? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Sí",
                    "No"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "3 Principales proyectos (título, activo, institución que financia)",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ],
            [
                "pregunta" => "3 Principales publicaciones (título y doi)",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ],
            [
                "pregunta" => "3 Principales patentes si las hay",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ]
        ]
    ],
    [
        "seccion" => "SECCIÓN C: Áreas de conocimiento en ciberseguridad",
        "preguntas" => [
            [
                "pregunta" => "¿Sobre qué áreas de conocimiento en ciberseguridad se realizan las investigaciones del equipo? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Ciberdefensa/Ciberataque",
                    "Dispositivos móviles",
                    "Criptografía",
                    "Procedimientos/Operaciones",
                    "Secure Coding",
                    "Hardware",
                    "Deepfake",
                    "Sistemas con IA/LLM",
                    "Infraestructura crítica y sistemas de control industrial",
                    "Educación",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de ciberdefensa/ciberataque, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Identificación de amenazas",
                    "Contramedidas",
                    "Detección de vulnerabilidades",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de dispositivos móviles, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Cryptomóviles",
                    "Seguridad de aplicaciones móviles",
                    "Gestión de dispositivos móviles",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de criptografía, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Criptografía simétrica",
                    "Criptografía asimétrica",
                    "Criptografía postcuántica",
                    "Protocolos criptográficos",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de aeronáutica, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Seguridad de sistemas de navegación",
                    "Protección de datos de vuelo",
                    "Ciberseguridad en sistemas de control de tráfico aéreo",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de sistemas con IA/LLM, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Detección de amenazas con IA",
                    "Uso de LLM para análisis de seguridad",
                    "Implementación de IA en sistemas de defensa",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de infraestructura crítica y sistemas de control industrial, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Protección de redes industriales",
                    "Seguridad en sistemas SCADA",
                    "Resiliencia de infraestructuras críticas",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de educación, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Protección de datos académicos",
                    "Seguridad en plataformas de aprendizaje en línea",
                    "Concienciación y formación en ciberseguridad",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Por favor, añada comentarios y cualquier información que considere relevante para esta encuesta.",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ],
            [
                "pregunta" => "Dentro del área de APT (Amenazas Persistentes Avanzadas), ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Técnicas de infiltración",
                    "Exfiltración de datos",
                    "Detección y respuesta a APT",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de gusanos informáticos, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Propagación de gusanos",
                    "Técnicas de contención",
                    "Análisis de vulnerabilidades explotadas",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de ransomware, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Técnicas de cifrado",
                    "Estrategias de mitigación",
                    "Análisis de variantes de ransomware",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de malware, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Análisis de malware",
                    "Técnicas de evasión",
                    "Ingeniería inversa",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Dentro del área de análisis forense, ¿en qué campos se centran las investigaciones? *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Recuperación de datos",
                    "Análisis de metadatos",
                    "Preservación de evidencias",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "¿Ofrece servicios?",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Acceso para investigación y pruebas reales",
                    "Acceso para investigación y pruebas en plantas piloto",
                    "Consultoría",
                    "Desarrollo e implementación de soluciones de ciberseguridad",
                    "Evaluaciones de ciberseguridad",
                    "Formación especializada",
                    "Ejercicios tipo pentest y red team",
                    "Evaluación de máquina herramienta",
                    "Evaluación de dispositivos y componentes industriales",
                    "Soporte normativo",
                    "Investigación, desarrollo e implementación de nuevas soluciones de ciberseguridad especializadas en entornos industriales",
                    "Evaluaciones de seguridad de componentes y/o sistemas industriales: auditorías, escaneo de vulnerabilidades, pruebas de intrusión, etc.",
                    "Servicios de formación en entornos industriales, entornos IT, securización de entornos industriales, etc.",
                    "Acceso remoto y/o físico a instalaciones industriales reales, para llevar a cabo tareas de investigación y pruebas",
                    "Acceso remoto y/o físico a plantas piloto y maquetas industriales de procesos, para llevar a cabo tareas de investigación y pruebas",
                    "Asesoramiento experto en implementación de entornos industriales, implementación de plataformas tecnológicas de acceso a entornos industriales, securización de entornos industriales, etc.",
                    "Laboratorio de seguridad industrial orientado a la demostración del impacto de posibles ciberataques en infraestructuras críticas industriales",
                    "Espacio de innovación e investigación activo, dinámico, abierto a nuevas ideas y en continua evolución",
                    "Laboratorio de pruebas y ensayos de sistemas de control, medida y protección para instalaciones eléctricas en el sector transporte (ferroviario) y sector energético (generación, transporte y distribución)",
                    "Centro de control y auditorías de seguridad de routers de cliente de Orange y Jazztel e IoT",
                    "Detectar fallos de seguridad",
                    "Prevenir incidentes de seguridad",
                    "Realizar certificaciones de seguridad",
                    "Réplica de escenarios de cliente en entornos controlados",
                    "Entorno de laboratorio con multitud de tecnologías de carácter industrial destinado a la investigación, realización de pruebas, desarrollos y evaluaciones lo más realistas posibles de productos (propios o de terceros) y soluciones de seguridad",
                    "Laboratorio de ciberseguridad a dispositivos IoT smart grids, dispositivos médicos, sector del agua y dispositivos industriales",
                    "Laboratorio de ciberseguridad para equipos sector salud",
                    "Realización de cursos de formación en ciberseguridad industrial",
                    "Desarrollo de soluciones y herramientas de seguridad para el entorno industrial",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ]
        ]
    ]
];

?>

<center>
<div id="resultados">
    <?php 
        
        if(isset($_POST["r"])){
            
            $myfile = fopen("views/docs/resultadosColores.csv", "a");
            $nuevaData = $_POST["r"] ."\n";
            fwrite($myfile, $nuevaData);
            fclose($myfile);
            
            $resultados = explode(",",$_POST["r"]);
            $promedio_error = 0;
            $promedio_tiempo = 0;
            $mejor_tiempo = $resultados[5];
            $menor_error = $resultados[6];
            
            foreach($resultados as $key => $value){
                
                //Despues del ejercicio de prueba
                if($key >= 5){
                    if($key%2 != 0){
                        $promedio_tiempo += $value;
                        
                        if($mejor_tiempo > $value){
                            $mejor_tiempo = $value;
                        }
                    }else{
                        $promedio_error += $value;
                        
                        if($menor_error > $value){
                            $menor_error = $value;
                        }
                    }
                }
            }
            
            $promedio_error /= 5;
            $promedio_tiempo /= 5;
            
            echo '
            <section class="questions__offer" style="margin-bottom:10px;">
                <h2 class="subtitle">Tus resultados</h2>
                
                <p class="questions__copy">-El primero es de prueba por lo que no está considerado en las estadisticas<br>-El margen de error se encuentra entre <br><b>0 <= Margen Error <= 765</b><br>mientras más cercano al 0 menor margen de error</p>
                <h2 class="subtitle">Estadisticas:</h2>
                <p class="questions__copy">-Mejor tiempo: <b>'.($mejor_tiempo/1000).' Segundos</b><br>-Menor margen de error: <b>'.$menor_error.'</b><br>-Media tiempo de respuesta: <b>'.($promedio_tiempo/1000).' Segundos</b><br>-Media margen de error: <b>'.$promedio_error.'</b><br></p>
                
                <h2 class="subtitle">1.</h2>
                <span id="pr2" style="display:inline-block; width:200px;height:200px; background:rgb(71,253,213); margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[4].'</b><br>Tiempo de Respuesta: <b>'.($resultados[3]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">2.</h2>
                <span id="pr3" style="display:inline-block; width:200px;height:200px; background:#CF3476; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[6].'</b><br>Tiempo de Respuesta: <b>'.($resultados[5]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">3.</h2>
                <span id="pr4" style="display:inline-block; width:200px;height:200px; background:#308446; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[8].'</b><br>Tiempo de Respuesta: <b>'.($resultados[7]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">4.</h2>
                <span id="pr5" style="display:inline-block; width:200px;height:200px; background:#C51D34; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[10].'</b><br>Tiempo de Respuesta: <b>'.($resultados[9]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">5.</h2>
                <span id="pr6" style="display:inline-block; width:200px;height:200px; background:#3E5F8A; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[12].'</b><br>Tiempo de Respuesta: <b>'.($resultados[11]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">6.</h2>
                <span id="pr7" style="display:inline-block; width:200px;height:200px; background:#F8F32B; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[14].'</b><br>Tiempo de Respuesta: <b>'.($resultados[13]/1000).' Segundos</b></p>
                
                <p class="questions__copy"></p>
                
                <a href="https://aldored.com/proyecto"><h2 class="subtitle">Volver página principal</h2></a>
            </section>
            ';
        
            return;
        }
        
        
        ?>
</div>
<div id="main">
    
    <header class="hero">
    <nav class="nav container">
        <div class="nav_logo">
            <h2 class="nav_title">Aware Tools Survey</h2>
        </div>
        
        <div class="nav_menu">
            <img src="">
        </div>
    </nav>
    
    <section class="hero_container container">
        <h1 class="hero_title"><?php echo $encuesta["nombre"] ?></h1>
        <p class="hero_paragraph"><b>Encuestas 100% anónimas</b></p>
        <p class="hero_paragraph"></p>
        <a class="contestar_enc cta">Contestar encuesta</a>
    </section>
</header>


<main>
        <section class="container about">
            <h2 class="subtitle">¿Cuál es nuestro objetivo?</h2>
            <p class="about__paragraph" style="text-align: justify;">En este estudio, buscamos levantar las capacidades de ciberseguridad que los centros podrían tener,
entendiendo que la ciberseguridad es transversal. El objetivo es identificar nodos a nivel nacional
que puedan convertirse en una red nacional de investigación en ciberseguridad, permitiendo que las
comunidades de equipos de investigación desarrollen proyectos conjuntos en apoyo al Pilar 5 de la
PNC.</p>

            <div class="about__main">
                <article class="about__icons">
                    <i class="fas fa-brush about_icon" aria-hidden="true"></i>
                    <h3 class="about__title">Encuesta</h3>
                    <p class="about__paragrah"></p>
                </article>

                <article class="about__icons">
                    <i class="fas fa-glasses about_icon" aria-hidden="true"></i>
                    <h3 class="about__title">Recopilación</h3>
                    <p class="about__paragrah"></p>
                </article>

                <article class="about__icons">
                    <i class="fas fa-chart-line about_icon" aria-hidden="true"></i>
                    <h3 class="about__title">Analisis y conclusiones</h3>
                    <p class="about__paragrah"></p>
                </article>
            </div>
        </section>

        
        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Algunas preguntas y respuestas que quizas te puedas haber hecho.</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Los datos donde quedan registrados?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">Los registros se almacenan en un archivo csv, el cual puedes descargar <a href="views/docs/resultadosColores.csv">Aquí</a></p>
                    </div>
                </article>
                
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué datos serán requeridos?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">Edad, enfermedades que afecten a su visión y sexo</p>
                    </div>
                </article>
                
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Existe algún requisito para contestar la encuesta?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">No hay requisitos para contestar encuesta.</p>
                    </div>
                </article>
                
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Quiénes somos?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">Somos un grupo de cuatro estudiantes de la Universidad Adolfo Ibañez de Viña del Mar. <b><br> Matthias Dietert.<br> Diego Figueroa.<br> Matias Orozco.<br> Aldo Muñoz.</b></p>
                    </div>
                </article>
                
            </section>

            <section class="questions__offer" style="margin-bottom:10px;">
                <h2 class="subtitle">¿Estas listo para realizar encuesta?</h2>
                <a href="#" class="cta contestar_enc">Contestar encuesta</a>
            </section>
            
            <br><br><br>
        </section>
    </main>
    
</div>
<style>
    input{
            background: rgba(255,255,255,0.1);
    border: none;
    font-size: 16px;
    height: auto;
    margin: 0;
    outline: 0;
    padding: 15px;
    width: 100%;
    background-color: #e8eeef;
    color: #8a97a0;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    }
    
</style>

<form role="form" method="post" name="encuesta_form">
    
<?php

foreach($formulario as $keySeccion => $seccion){
    
    echo '
    <section class="questions container seccion_'.$keySeccion.' noDisplay">
        <h2 class="subtitle">'.$seccion["seccion"].'</h2>
        <p class="questions__paragraph">Por favor responda las siguientes preguntas</p>
    ';
    
    foreach($seccion["preguntas"] as $keyPregunta => $pregunta){
        
        echo '
        <fieldset class="container" style="text-align:left;">
            <h3>'.$pregunta["pregunta"].'</h3>
        ';

        if($pregunta["tipo"] == "radio"){
            
            foreach($pregunta["alternativas"] as $key => $alternativa){
                
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer;" name="pregunta_'.$keyPregunta.'" value="'.$alternativa.'" class="alternativaInput noDisplay" type="radio">
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input type="text" name="pregunta_'.$keySeccion.'_especificar" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "radioMultiple"){

            foreach($pregunta["alternativas"] as $key => $alternativa){
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer; padding-bottom: 20px;" name="pregunta_'.$keyPregunta.'" value="'.$alternativa.'" class="alternativaInput noDisplay" type="checkbox">
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input type="text" name="pregunta_'.$keySeccion.'_especificar" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "text"){

            echo '<input type="text" name="pregunta_'.$keyPregunta.'">';
        }else{
            echo "Tipo de pregunta no soportada";
        }
        
        echo '</fieldset>';
    }
    // Botón de siguiente
    if($keySeccion < count($formulario)-1){
        echo '
        <p class="siguiente" siguiente="'.($keySeccion+1).'">
            <button type="button">
                Siguiente
            </button>
        <p>
        ';
    }else{
        // Botón de enviar
        echo '
        <button type="submit">
            Enviar
        </button>';
    }

    echo '</section>';
}


?>
</form>

<section id="encuesta" style="display:none;">
    <div>
        
        
        <h3 class="texto_e">¿Las mujeres son mejores diferenciando colores que los hombres?</h3>
        
        
        <form role="form" method="post" name="encuesta_form">
        
        <fieldset class="container pregunta_1" style="text-align:left;">
            
            <h3>Información básica</h3>
            
            <div class="col-xs-12 col-sm-4">
                <label for="edad">Edad:</label>
                <input type="number" id="edad_e" name="edad">
            </div>
            
            <div>
                
            </div>
            <div class="col-xs-12 col-sm-3">
              <label>Sexo:</label>
              <div class="radio">
                <input id="radio-1" name="gen" value="M" type="radio" checked>
                <label for="radio-1" class="radio-label">Masculino</label>
              </div>
            
              <div class="radio">
                <input id="radio-2" name="gen" value="F" type="radio">
                <label  for="radio-2" class="radio-label">Femenino</label>
              </div>
            </div>
            
            <div class="col-xs-12 col-sm-3">
              <label>¿Sufres daltonismo o similares?:</label>
              <div class="radio">
                <input id="enf-si" name="enf" value="1" type="radio">
                <label for="enf-si" class="radio-label">SI</label>
              </div>
            
              <div class="radio">
                <input id="enf-no" name="enf" value="0" type="radio" checked>
                <label  for="enf-no" class="radio-label">NO</label>
              </div>
            </div>
            
            <p class="siguiente_1">
                <button style="margin-top:5px;" type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_2 noDisplay">
            <h3>1.</h3>
            <span id="pr2" style="display:inline-block; width:200px;height:200px; background:rgb(71,253,213); margin-bottom:5px;">&nbsp;</span>
            <span id="pr2_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e2" data-jscolor="{previewElement:'#pr2_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_3 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_3 noDisplay">
            <h3>2.</h3>
            <h3 class="cron_3">01:00</h3>
            <span id="pr3" style="display:inline-block; width:200px;height:200px; background:#CF3476; margin-bottom:5px;">&nbsp;</span>
            <span id="pr3_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e3" data-jscolor="{previewElement:'#pr3_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_4 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_4 noDisplay">
            <h3>3.</h3>
            <h3 class="cron_4">01:00</h3>
            <span id="pr4" style="display:inline-block; width:200px;height:200px; background:#308446; margin-bottom:5px;">&nbsp;</span>
            <span id="pr4_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e4" data-jscolor="{previewElement:'#pr4_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_5 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_5 noDisplay">
            <h3>4.</h3>
            <h3 class="cron_5">01:00</h3>
            <span id="pr5" style="display:inline-block; width:200px;height:200px; background:#C51D34; margin-bottom:5px;">&nbsp;</span>
            <span id="pr5_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e5" data-jscolor="{previewElement:'#pr5_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_6 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_6 noDisplay">
            <h3>5.</h3>
            <h3 class="cron_6">01:00</h3>
            <span id="pr6" style="display:inline-block; width:200px;height:200px; background:#3E5F8A; margin-bottom:5px;">&nbsp;</span>
            <span id="pr6_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e6" data-jscolor="{previewElement:'#pr6_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_7 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_7 noDisplay">
            <h3>6.</h3>
            <h3 class="cron_7">01:00</h3>
            <span id="pr7" style="display:inline-block; width:200px;height:200px; background:#F8F32B; margin-bottom:5px;">&nbsp;</span>
            <span id="pr7_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e7" data-jscolor="{previewElement:'#pr7_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_8 noDisplay">
                <button type="submit">
                    Terminar
                </button>
            <p>
                
            <input id="i" name="i" type="text" hidden>
            <input id="r" name="r" type="text" hidden>
        </fieldset>
        
        </form>
        
        
    </div>
</section>

</center>

<script src="views/js/encuestas.js"></script>