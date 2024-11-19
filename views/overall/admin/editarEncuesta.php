<?php

$encuesta = ControllerEncuestas::ctrMostrarEncuestas("slug", $rutas[2]);

if(!$encuesta){
    echo '<script>
        window.location = "'.$url.'";
    </script>';

    return;
}

?>

<section id="editarEncuesta">
    <div class="container">
        <h2>Editar encuesta</h2>
        <div class="form-group">
            <label for="nombreEncuesta">Nombre de la encuesta</label>
            <input type="text" class="form-control" name="nombreEncuesta" placeholder="Ejemplo: Encuesta de ciberseguridad" value="<?php echo $encuesta["nombre"] ?>" required>
            <span class="text-danger" id="slugError"></span>
        </div>

        <div class="form-group">
            <label for="slugEncuesta">Slug de la encuesta</label>
            <input type="text" class="form-control" name="slugEncuesta" value="<?php echo $encuesta["slug"] ?>" readonly>
        </div>

        <div class="form-group">
            <label for="descripcionEncuesta">Descripción de la encuesta</label>
            <textarea class="form-control" name="descripcionEncuesta" rows="3" placeholder="Ejemplo: Encuesta para medir la ciberseguridad en las empresas" required><?php echo $encuesta["descripcion"] ?></textarea>
        </div>

        <div class="form-group">
            <img id="imagenEncuestaPreview" src="<?php echo $url . $encuesta["imagen"] ?>" alt="Imagen de la encuesta" style="max-width: 250px; margin-top: 5px;">
            <label for="imagenEncuesta">Imagen de la encuesta</label>
            <small>Se recomienda una con mismo ratio entre encuestas que se quieren realizar en conjunto</small>
            <input type="file" id="imagenEncuesta" class="form-control" name="imagenEncuesta">
        </div>

        <?php

        $secciones = json_decode($encuesta["secciones"], true);

        ?>
        <div class="form-group">
            <label>Editar encuesta</label>
            <!-- Crear secciones de la encuesta -->
            <table id="secciones" class="table-responsive table">
                <thead>
                    <tr>
                        <td>Sección</td>
                        <td>Preguntas</td>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    foreach($secciones as $key => $value){
                        echo '<tr>
                            <td>
                                <input type="text" class="form-control" placeholder="Ejemplo: Información básica" value="'.$value["nombre"].'">
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
                                    <tbody>';

                                    $preguntas = $value["preguntas"];

                                    foreach($preguntas as $key2 => $value2){
                                        echo '<tr>
                                            <td>
                                                <input type="text" class="form-control nombrePregunta" placeholder="Ejemplo: ¿Cuál es su experiencia en ciberseguridad? *" value="'.$value2["nombre"].'">
                                            </td>
                                            <td>
                                                <select class="form-control tipoPregunta">
                                                    <option value="radio" '.($value2["tipo"] == "radio" ? "selected" : "").'>Selección única</option>
                                                    <option value="radioMultiple" '.($value2["tipo"] == "radioMultiple" ? "selected" : "").'>Selección múltiple</option>
                                                    <option value="text" '.($value2["tipo"] == "text" ? "selected" : "").'>Texto</option>
                                                </select>
                                            </td>
                                            <td>';

                                            $alternativas = $value2["alternativas"];

                                            foreach($alternativas as $key3 => $value3){
                                                if($value3 !== "Otro (especificar)"){
                                                    echo '<input type="text" class="form-control" placeholder="Ejemplo: Menos de 2 años" value="'.$value3.'">';
                                                }
                                            }

                                            $cantidadAlternativas = sizeof($alternativas);
                                            
                                            if($cantidadAlternativas > 0){
                                                echo '<button type="button" class="btn btn-success agregarNuevaAlternativa" style="margin-right: 5px;"><i class="fas fa-plus"></i></button>';
                                                if($alternativas[$cantidadAlternativas - 1] !== "Otro (especificar)"){
                                                    echo '<button type="button" class="btn btn-primary agregarOtro" accion="agregar"><i class="fas fa-plus"></i> Agregar otro</button>';
                                                }else{
                                                    echo '<input type="text" class="form-control" value="Otro (especificar)" readonly>';
                                                    echo '<button type="button" class="btn btn-danger agregarOtro" accion="quitar"><i class="fas fa-minus"></i> Quitar otro</button>';
                                                }
                                            }

                                            echo '
                                            </td>
                                            <td>
                                                <input class="form-control" type="checkbox" '.($value2["obligatoria"] == 1 ? "checked" : "").'>
                                            </td>
                                        </tr>';
                                    }

                                    echo '</tbody>
                                </table>

                                <button type="button" class="btn btn-success agregarNuevaPregunta">Nueva pregunta</button>
                                <button type="button" class="btn btn-default duplicarUltimaPregunta">Duplicar última pregunta</button>
                            </td>
                        </tr>';
                    }

                    ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" style="float:right;" id="btnCrearSeccion">Nueva sección</button>
            </br></br></br></br></br>
        </div>

        <!-- Cronometro en la encuesta Si/No -->
        <div class="form-group">
            <label for="cronometro">Cronómetro</label>
            <select id="cronometro" class="form-control" name="cronometro">
                <option value="1" <?php echo $encuesta["cronometro"] == 1 ? "selected" : "" ?>>Sí</option>
                <option value="0" <?php echo $encuesta["cronometro"] == 0 ? "selected" : "" ?>>No</option>
            </select>
        </div>

        <!-- Correo del creador de la encuesta -->
        <div class="form-group">
            <label for="correoCreador">Administradores Encuesta</label>
            <input type="email" class="form-control" name="correoCreador" placeholder="Tu correo con el que administrarás la encuesta" value="<?php echo implode(", ", json_decode($encuesta["administradores"], true)) ?>" readonly>
        </div>

        <button id="enviarEditarEncuesta" class="btn col-xs-12">Enviar</button>
    </div>
</section>

<script src="<?php echo $url ?>views/js/editarEncuesta.js?v=1.0"></script>

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