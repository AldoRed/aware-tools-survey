<?php

if(!isset($rutas[1])){

    $encuestas = ControllerEncuestas::ctrMostrarEncuestas();

    include "views/overall/admin/solicitarAdministrarEncuestas.php";

    return;
}

$encuesta = ControllerEncuestas::ctrMostrarEncuestas("slug", $rutas[1]);

if($encuesta){
    
    $secciones = ControllerSecciones::ctrMostrarSecciones("encuesta_id", $encuesta["id"]);
}
?>

<section id="encuestaEdit">
    <form method="post">
        <div class="container">
            <h2>Editar encuesta</h2>
            <!-- Title of survey into input -->
             <div class="form-group">
                <label for="nombreEncuesta">Nombre de la encuesta</label>
                <input type="text" class="form-control" name="nombreEncuesta" value="<?php echo $encuesta["nombre"] ?>" required>
            </div>

            <!-- Slug of survey into input -->
            <div class="form-group">
                <label for="slugEncuesta">Slug de la encuesta</label>
                <input type="text" class="form-control" name="slugEncuesta" value="<?php echo $encuesta["slug"] ?>" readonly>
            </div>

            <!-- Description of survey into textarea -->
            <div class="form-group">
                <label for="descripcionEncuesta">Descripción de la encuesta</label>
                <textarea class="form-control" name="descripcionEncuesta" rows="3" required><?php echo $encuesta["descripcion"] ?></textarea>
            </div>

            <!-- Image of survey into input -->
            <div class="form-group">
                <label for="imagenEncuesta">Imagen de la encuesta</label>
                <img src="<?php echo $url.$encuesta["imagen"] ?>" class="img-thumbnail" width="250px">
                <input type="file" class="form-control" name="imagenEncuesta">
            </div>
        </div>
    </form>
</section>