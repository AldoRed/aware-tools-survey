<section id="crearEncuesta">
    <div class="container">
        <h2>Crear encuesta</h2>
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
            <img id="imagenEncuestaPreview" src="" alt="Imagen de la encuesta" style="max-width: 250px; margin-top: 5px; display:none;">
            <label for="imagenEncuesta">Imagen de la encuesta</label>
            <small>Se recomienda una con mismo ratio entre encuestas que se quieren realizar en conjunto</small>
            <input type="file" id="imagenEncuesta" class="form-control" name="imagenEncuesta">
        </div>

        <div class="form-group">
            <label>Crear encuesta</label>
            <!-- Crear secciones de la encuesta -->
            <table id="secciones" class="table-responsive table">
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
                            <input type="text" class="form-control" placeholder="Ejemplo: Información básica" value="SECCIÓN A: Preguntas relativas a la investigación realizada">
                        </td>
                        <td>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <td>Pregunta</td>
                                        <td>Tipo</td>
                                        <td>Alternativas</td>
                                        <td>Obligatoria</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control nombrePregunta" placeholder="Ejemplo: ¿Cuál es su experiencia en ciberseguridad? *" value="¿Qué días trabaja? *">
                                        </td>
                                        <td>
                                            <select class="form-control tipoPregunta">
                                                <option value="radio">Selección única</option>
                                                <option value="radioMultiple" selected>Selección múltiple</option>
                                                <option value="text">Texto</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Ejemplo: Menos de 2 años" value="Lunes">
                                            <input type="text" class="form-control" placeholder="Ejemplo: Entre 2 y 5 años" value="Martes">
                                            <input type="text" class="form-control" placeholder="Ejemplo: Más de 5 años" value="Miercoles">
                                            <button type="button" class="btn btn-success agregarNuevaAlternativa"><i class="fas fa-plus"></i></button>
                                            <button type="button" class="btn btn-primary agregarOtro"><i class='fas fa-plus'></i> Agregar otro</button>
                                        </td>
                                        <td>
                                            <input class="form-control" type="checkbox" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control nombrePregunta" placeholder="Ejemplo: Mencione brevemente su área de especialización" value="Acontecimiento icónico">
                                        </td>
                                        <td>
                                            <select class="form-control tipoPregunta">
                                                <option value="radio">Selección única</option>
                                                <option value="radioMultiple">Selección múltiple</option>
                                                <option value="text" selected>Texto</option>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td>
                                            <input class="form-control" type="checkbox" checked>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success agregarNuevaPregunta">Nueva pregunta</button>
                            <button type="button" class="btn btn-default duplicarUltimaPregunta">Duplicar última pregunta</button>
                        </td>
                    </tr>
                </tbody>
                
            </table>
            <button type="button" class="btn btn-primary" style="float:right;" id="btnCrearSeccion">Nueva sección</button>
            </br></br></br></br></br>
        </div>

        <!-- Correo del creador de la encuesta -->
        <div class="form-group">
            <label for="correoCreador">Correo del creador de la encuesta</label>
            <input type="email" class="form-control" name="correoCreador" placeholder="Tu correo con el que administrarás la encuesta">
        </div>

        <button id="enviarCrearEncuesta" class="btn col-xs-12">Enviar</button>
    </div>
</secion>

<script src="<?php echo $url ?>views/js/crearEncuesta.js?v=2.0"></script>

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