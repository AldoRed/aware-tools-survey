<?php

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