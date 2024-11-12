<section id="crearEncuesta">
    <div class="container">
        <h2>Crear encuesta</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombreEncuesta">Nombre de la encuesta</label>
                <input type="text" class="form-control" name="nombreEncuesta" placeholder="Ejemplo: Encuesta de ciberseguridad" required>
            </div>

            <div class="form-group">
                <label for="slugEncuesta">Slug de la encuesta</label>
                <input type="text" class="form-control" name="slugEncuesta" placeholder="Se generará automáticamente al modificar nombre de encuesta" readonly>
            </div>

            <div class="form-group">
                <label for="descripcionEncuesta">Descripción de la encuesta</label>
                <textarea class="form-control" name="descripcionEncuesta" rows="3" placeholder="Ejemplo: Encuesta para medir la ciberseguridad en las empresas" required></textarea>
            </div>

            <div class="form-group">
                <label for="imagenEncuesta">Imagen de la encuesta</label>
                <small>Se recomienda una imagen de 250x250px</small>
                <input type="file" class="form-control" name="imagenEncuesta">
            </div>

            <div class="form-group">
                <label for="seccionesEncuesta">Secciones de la encuesta</label>
                <textarea class="form-control" name="seccionesEncuesta" rows="20" required>
[
    [
        "seccion" => "SECCIÓN EJEMPLO: Preguntas demostrativas",
        "preguntas" => [
            [
                "pregunta" => "¿Cuál es su experiencia en ciberseguridad? *",
                "tipo" => "radio",
                "alternativas" => [
                    "Menos de 2 años",
                    "Entre 2 y 5 años",
                    "Más de 5 años"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Mencione brevemente su área de especialización",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ]
        ]
    ],
    [
        "seccion" => "SECCIÓN 2 EJEMPLO: Preguntas demostrativas",
        "preguntas" => [
            [
                "pregunta" => "Pregunta de seleccion multiple *",
                "tipo" => "radioMultiple",
                "alternativas" => [
                    "Opción 1",
                    "Opción 2",
                    "Opción 3"
                ],
                "obligatorio" => true
            ],
            [
                "pregunta" => "Pregunta con respuesta de solo texto",
                "tipo" => "text",
                "alternativas" => [],
                "obligatorio" => false
            ]
        ]
    ]
]</textarea>
            </div>

            <!-- Correo del creador de la encuesta -->
            <div class="form-group">
                <label for="correoCreador">Correo del creador de la encuesta</label>
                <input type="email" class="form-control" name="correoCreador" placeholder="Tu correo con el que administrarás la encuesta" required>
            </div>

            <button type="submit" class="btn col-xs-12">Enviar</button>
        </form>
    </div>
</secion>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

table td {
    padding: 5px 10px;
}

table input[type="checkbox"] {
    margin: 0;
}

#crearEncuesta form{
    min-height: 80vh;
    margin-bottom: 10px;
}
</style>