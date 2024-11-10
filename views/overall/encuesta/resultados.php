<?php

if(isset($_POST["pregunta-0-0"]) && !isset($_SESSION["encuestas"][$encuesta["id"]])){
    
    ControllerEncuestas::ctrCrearCSV($encuesta["ruta"], $formulario, $_POST);

    $_SESSION["encuestas"][$encuesta["id"]] = 1;

    echo '<script>
        window.location = "'.$url.'/inicio"
        </script>';

}