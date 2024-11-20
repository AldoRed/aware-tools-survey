<?php

$token = $rutas[1];

$solicitudes = ControllerEncuestas::ctrMostrarSolicitudesEnviarEncuesta($token);

$encuestas = array();

foreach($solicitudes as $key => $value){
    $respuesta = ControllerEncuestas::ctrMostrarEncuestas("id", $value["encuesta"]);
    array_push($encuestas, $respuesta);
}

if(!$solicitudes){
    echo '<script>
        Swal.fire({
            title: "¡Token inválido!",
            icon: "warning",
            confirmButtonText: "Cerrar"
        }).then((result) => {
            if(result.value){
                window.location = "'.$url.'";
            }
        });
    </script>';
    return;
}

$emails = JSON_decode($solicitudes[0]["emails"], true);

?>
<div class="container">
    <div class="panel panel">
        <div class="panel-heading text-center">
            <h2 class="panel-title">Enviar Encuesta</h2>
        </div>
        <div class="panel-body">
            <h4>Encuestas que se desean enviar:</h4>
            <ul class="list-group">
                <?php
                foreach ($encuestas as $key => $value) {
                    echo '<li class="list-group-item"><a href="'.$url.$value["slug"].'" target="_blank">'.$value["nombre"].'</a></li>';
                }
                ?>
            </ul>

            <h4>Se aceptará la solicitud de enviar la encuesta a los siguientes correos:</h4>
            <ol class="list-group">
                <?php
                foreach ($emails as $key => $value) {
                    echo '<li class="list-group-item">'.($key + 1).'. '.$value.'</li>';
                }
                ?>
            </ol>

            <div class="form-group">
                <label for="message"><strong>Mensaje:</strong></label>
                <textarea id="message" class="form-control" rows="3" readonly><?php echo $solicitudes[0]["mensaje"] ?></textarea>
            </div>

            <div class="text-right">
                <button class="btn btn-primary btn-md publicarEncuesta" token="<?php echo $rutas[1] ?>">Publicar Encuesta</button>
            </div>
        </div>
    </div>
</div>

<style>
body {
    background-color: #f5f5f5; /* Fondo gris claro */
    font-family: Arial, sans-serif;
}

.panel {
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil */
}

.panel-heading {
    background-color: #337ab7; /* Color primario de Bootstrap 3 */
    color: #fff;
    border-radius: 10px 10px 0 0;
    padding: 15px;
}

.panel-title {
    font-size: 18px;
    font-weight: bold;
}

.list-group-item {
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 5px;
    background-color: #fff;
    color: #333;
}

textarea {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
}

.btn-primary {
    background-color: #337ab7;
    border-color: #2e6da4;
}
</style>

<script src="<?php echo $url ?>views/js/aceptarYEnviarEncuesta.js?v=2.1"></script>