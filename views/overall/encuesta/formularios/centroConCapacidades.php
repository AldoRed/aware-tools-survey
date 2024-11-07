<?php

$formulario["1"] =
[
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