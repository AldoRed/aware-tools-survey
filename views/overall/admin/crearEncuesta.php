<section id="crearEncuesta">
    <div class="container">
        <h2>Crear encuesta</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombreEncuesta">Nombre de la encuesta</label>
                <input type="text" class="form-control" name="nombreEncuesta" placeholder="Ejemplo: Encuesta de ciberseguridad" required>
                <span class="text-danger" id="slugError"></span>
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
                <small>Se recomienda una con mismo ratio entre encuestas que se quieren realizar</small>
                <input type="file" class="form-control" name="imagenEncuesta">
            </div>

            <div class="form-group">
                <!-- Crear secciones de la encuesta -->
                <table id="secciones" class="table-responsive table">
                <button type="button" class="btn btn-primary" id="crearSeccion">Nueva sección</button>
                    <thead>
                        <tr>
                            <td>Sección</td>
                            <td>Preguntas</td>
                        </tr>
                    </thead>

                    <!-- Ejemplo para maquetar secciones -->
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="seccion[]" placeholder="Ejemplo: Información básica" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success" onclick="crearPregunta(this)">Nueva pregunta</button>
                                <table class="table table-responsive" id="preguntasSeccion1">
                                    <thead>
                                        <tr>
                                            <td>Pregunta</td>
                                            <td>Tipo</td>
                                            <td>Alternativas</td>
                                            <td>Obligatorio</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="pregunta[0][]" placeholder="Ejemplo: ¿Cuál es su experiencia en ciberseguridad? *" required>
                                            </td>
                                            <td>
                                                <select class="form-control" name="tipo[0][]">
                                                    <option value="radio">Selección única</option>
                                                    <option value="radioMultiple">Selección múltiple</option>
                                                    <option value="text">Texto</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="alternativa[0][]" placeholder="Ejemplo: Menos de 2 años">
                                                <input type="text" class="form-control" name="alternativa[0][]" placeholder="Ejemplo: Entre 2 y 5 años">
                                                <input type="text" class="form-control" name="alternativa[0][]" placeholder="Ejemplo: Más de 5 años">
                                                <i class="fas fa-plus agregarAlternativaInput"></i>
                                            </td>
                                            <td>
                                                <input type="checkbox" value="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="pregunta[0][]" placeholder="Ejemplo: Mencione brevemente su área de especialización">
                                            </td>
                                            <td>
                                                <select class="form-control" name="tipo[0][]">
                                                    <option value="radio">Selección única</option>
                                                    <option value="radioMultiple">Selección múltiple</option>
                                                    <option value="text">Texto</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                                <i class="fas fa-plus agregarAlternativaInput"></i>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="obligatorio[0][]" value="true">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
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

<script src="<?php echo $url ?>views/js/crearEncuesta.js"></script>

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