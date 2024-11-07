<?php

$encuesta = $encuestas[$key];

// Temporalmente se agrega manualmente el array de preguntas frecuentes
$preguntas = array(["¿Los datos donde quedan registrados?", "Los registros se almacenan en un archivo csv, el cual puedes descargar <a href='views/docs/resultadosColores.csv'>Aquí</a>"],
                                        ["¿Qué datos serán requeridos?", "Edad, enfermedades que afecten a su visión y sexo"],
                                     ["¿Existe algún requisito para contestar la encuesta?", "No hay requisitos para contestar encuesta."],
                                     ["¿Quiénes somos?", "Somos un grupo de cuatro estudiantes de la Universidad Adolfo Ibañez de Viña del Mar. <b><br> Matthias Dietert.<br> Diego Figueroa.<br> Matias Orozco.<br> Aldo Muñoz.</b>"]);
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

$formulario["2"] = 
[
    [
        "seccion" => "Información General",
        "preguntas" => [
            [
                "pregunta" => "Nombre de la Institución/Empresa *",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Tipo de Institución/Empresa *",
                "tipo" => "radio",
                "alternativas" => [
                    "Pública",
                    "Startup",
                    "Empresa Privada"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Sector de Actividad *",
                "tipo" => "radio",
                "alternativas" => [
                    "Administración Pública",
                    "Tecnología",
                    "Salud",
                    "Finanzas",
                    "Educación",
                    "Minería",
                    "Otro (especificar)"
                ],
                "obligatorio" => true
            ]
        ]
    ],
    [
        "seccion" => "Necesidades en Ciberseguridad",
        "preguntas" => [
            [
                "pregunta" => "Principales desafíos de ciberseguridad que enfrenta su institución/empresa actualmente:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Protección de datos",
                    "Prevención de ataques cibernéticos",
                    "Gestión de identidades y accesos",
                    "Seguridad en la nube",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "Soluciones de ciberseguridad implementadas por su institución/empresa:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Firewalls",
                    "Sistemas de detección de intrusiones",
                    "Autenticación multifactor",
                    "Cifrado de datos",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "Necesidades de ciberseguridad no resueltas por las soluciones actuales disponibles en el mercado:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Falta de personal capacitado",
                    "Herramientas insuficientes para la detección de amenazas avanzadas",
                    "Integración de soluciones de ciberseguridad con sistemas existentes",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ]
        ]
    ],
    [
        "seccion" => "Capacidades de Investigación Necesarias",
        "preguntas" => [
            [
                "pregunta" => "Áreas de investigación en ciberseguridad que considera prioritarias para su institución/empresa:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Inteligencia artificial aplicada a la ciberseguridad",
                    "Criptografía avanzada",
                    "Seguridad en dispositivos IoT",
                    "Respuesta a incidentes y recuperación",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "Capacidades de investigación que su institución/empresa considera necesarias para abordar los desafíos de ciberseguridad:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Desarrollo de nuevas tecnologías de detección de amenazas",
                    "Investigación en criptografía y técnicas de cifrado",
                    "Estudios sobre la seguridad en la nube y la protección de datos",
                    "Investigación en seguridad de dispositivos móviles y IoT",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "En qué áreas específicas debería enfocarse la investigación aplicada para resolver problemas importantes de ciberseguridad:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Desarrollo de soluciones para la protección de infraestructuras críticas",
                    "Innovación en métodos de autenticación y gestión de identidades",
                    "Creación de herramientas avanzadas para la detección y mitigación de ataques",
                    "Investigación en privacidad y protección de datos personales",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "Dada las nuevas regulaciones de IA en Chile, ¿en qué deberían estar investigando los investigadores chilenos para desarrollar tecnología que permita:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Detección de sistemas de IA operando con niveles de riesgo (inaceptable, alto, limitado, sin riesgo evidente)",
                    "Herramientas que auditen riesgos de regulación para recomendar normativas de autorregulación",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Qué capacidades de investigación considera necesarias en Chile para cumplir con las nuevas regulaciones de IA?",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Evaluación y mitigación de riesgos de IA",
                    "Desarrollo de sistemas de IA seguros y éticos",
                    "Implementación de procesos de auditoría y cumplimiento",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿En qué deberían investigar los investigadores chilenos en privacidad de datos para aumentar la Protección de Datos Personales acorde a la ley?",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Desarrollo de contratos inteligentes para la gestión de datos personales",
                    "Implementación de tecnologías avanzadas de cifrado y anonimización",
                    "Creación de sistemas de gestión de consentimiento y derechos de los titulares de datos",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Qué impacto tienen las regulaciones de interoperabilidad en lo que deberían investigar y los servicios de I+D que debieran ofrecer los centros de investigación en ciberseguridad en Chile para ayudar, por ejemplo, a la salud a cumplir con estas regulaciones?",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Desarrollo de estándares y protocolos de interoperabilidad seguros",
                    "Investigación en integración segura de sistemas y datos en el sector salud",
                    "Creación de herramientas para la interoperabilidad de dispositivos médicos y sistemas de salud",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Cómo deberían abordarse las vulnerabilidades propias de la IA cuando se aplica en salud, en vehículos autónomos en la minería, y en el sistema judicial?",
                "tipo" => "radio",
                "alternativas" => [
                    "Desarrollo de técnicas de detección y mitigación de vulnerabilidades en sistemas de IA",
                    "Investigación en seguridad y privacidad de datos en aplicaciones de IA en salud",
                    "Creación de marcos de seguridad para la implementación de IA en vehículos autónomos y sistemas judiciales",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Qué impacto tiene la Ley Fintech en su institución/empresa?",
                "tipo" => "radio",
                "alternativas" => [
                    "Cumplimiento con los requisitos de inscripción y autorización de servicios financieros",
                    "Implementación de normas de gobernanza corporativa y gestión de riesgos",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Qué capacidades de ciberseguridad con base científico-tecnológica son necesarias para permitir que miles de participantes del sistema de finanzas abiertas operen con la Ley Fintech de manera segura?",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Desarrollo de plataformas fintech seguras y conformes",
                    "Implementación de sistemas de gestión de riesgos y cumplimiento normativo",
                    "Creación de tecnologías para la protección de datos y transacciones en finanzas abiertas",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Qué capacidades de investigación son necesarias para combatir deepfakes y estafas usando IA generativa?",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Desarrollo de herramientas avanzadas de detección de deepfakes",
                    "Creación de sistemas de verificación de autenticidad de medios digitales",
                    "Investigación en técnicas de análisis de patrones y contextos para identificar contenido generado por IA",
                    "Implementación de tecnologías de rastreo y autenticación de origen de datos",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "Comentarios adicionales: Por favor, añada cualquier comentario adicional o información relevante sobre las necesidades de ciberseguridad de su institución/empresa.",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ]
        ]
    ]
];

$formulario["3"] = 
[
    [
        "seccion" => "Uso de Fondos de Investigación Aplicada",
        "preguntas" => [
            [
                "pregunta" => "En qué áreas específicas considera que se deberían invertir los fondos de investigación aplicada para resolver temas importantes en ciberseguridad:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Capacitación y formación de personal especializado en ciberseguridad",
                    "Desarrollo de tecnologías avanzadas para la detección y respuesta a incidentes",
                    "Investigación en nuevas técnicas de criptografía y seguridad de datos",
                    "Implementación de soluciones de ciberseguridad en entornos reales",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Qué tipo de apoyo o recursos necesitaría su institución/empresa para mejorar su postura de ciberseguridad?:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Financiamiento para proyectos de investigación",
                    "Capacitación y formación de personal",
                    "Acceso a tecnologías avanzadas",
                    "Colaboración con expertos en ciberseguridad",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "¿Qué barreras ha encontrado su institución/empresa para implementar soluciones de ciberseguridad efectivas?:",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Costos elevados",
                    "Falta de conocimiento especializado",
                    "Resistencia al cambio",
                    "Falta de apoyo institucional",
                    "Otro (especificar)"
                ],
                "obligatorio" => false
            ],
            [
                "pregunta" => "Comentarios adicionales: Por favor, añada cualquier comentario adicional o información relevante sobre las necesidades de ciberseguridad de su institución/empresa.",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ]
        ]
    ]
];

$formulario = $formulario[$encuesta["id"]];

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
                <a href="'.$url.'"><h2 class="subtitle">Volver página principal</h2></a>
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
            <h2 class="nav_title"><img src="views/img/logo.png" style="width:60px;" alt="Logo de Aware Tools"></h2>
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

                <?php

                foreach($preguntas as $key => $pregunta){
                    echo '
                    <article class="questions__padding">
                        <div class="questions__answer">
                            <h3 class="questions__title">'.$pregunta[0].'
                                <span class="questions__arrow">
                                    <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                                </span> 
                            </h3>

                            <p class="questions__show">'.$pregunta[1].'</p>
                        </div>
                    </article>
                    ';
                }

                ?>

            </section>

            <section class="questions__offer" style="margin-bottom:10px;">
                <h2 class="subtitle">¿Estas listo para realizar encuesta?</h2>
                <a class="cta contestar_enc">Contestar encuesta</a>
            </section>
            
            <br><br><br>
        </section>
    </main>
    
</div>
<style>

    .hero::before{
        content: "";
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url(<?php echo $encuesta["imagen"] ?>);
        background-size:cover;
        clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 95%, 0 80%);
        z-index:-1;
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
            <h3>'.($keyPregunta+1) .'. '. $pregunta["pregunta"].'</h3>
        ';

        if($pregunta["tipo"] == "radio"){
            
            foreach($pregunta["alternativas"] as $key => $alternativa){
                
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer;" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" value="'.$alternativa.'" class="alternativaInput noDisplay" type="radio">
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input style="margin-left:19px;" type="text" name="pregunta-especificar-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "radioMultiple"){

            foreach($pregunta["alternativas"] as $key => $alternativa){
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer; padding-bottom: 20px;" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" value="'.$alternativa.'" class="alternativaInput noDisplay" type="checkbox">
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input style="margin-left:19px; width:80%;" type="text" name="pregunta-especificar-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "text"){

            echo '<input type="text" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" placeholder="Escribir respuesta aquí">';
        }else{
            echo "Tipo de pregunta no soportada";
        }
        
        echo '</fieldset>';
    }

    echo '</br></br>';
    // Botón de siguiente
    if($keySeccion < count($formulario)-1){
        echo '
        <p class="siguiente" siguiente="'.($keySeccion+1).'">
            <button type="button" class="btn">
                Siguiente
            </button>
        <p>
        ';
    }else{
        // Botón de enviar
        echo '
        <button type="submit" class="btn">
            Enviar
        </button>';
    }

    echo '</br></br></br></br></section>';
}


?>
</form>

</center>

<script src="views/js/encuestas.js"></script>