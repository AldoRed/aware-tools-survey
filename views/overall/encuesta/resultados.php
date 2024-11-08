<?php

if(isset($_POST)){
    
    ControllerEncuestas::ctrCrearCSV($encuesta["ruta"], $formulario, $_POST);

}