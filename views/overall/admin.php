<div class="container" style="margin-top: 20px;">
    <!-- Boton para crear encuesta -->
    <a href="<?php echo $url ?>admin/crear-encuesta" style="margin-bottom: 5px;" class="btn btn-success">Crear una encuesta</a>

    <!-- Boton para visualizar encuestas -->
    <a href="<?php echo $url ?>admin/visualizar-encuestas" style="margin-bottom: 5px;" class="btn btn-primary">Encuestas Aprobadas</a>

    <!-- Boton para solicitar administrar encuestas -->
    <a href="<?php echo $url ?>admin/solicitar-administrar-encuestas" style="margin-bottom: 5px;" class="btn btn-primary">Solicitar administrar encuestas</a>

    <!-- Boton para enviar encuestas -->
    <a href="<?php echo $url ?>admin/enviar-encuestas" style="margin-bottom: 5px;" class="btn btn-primary">Enviar encuestas</a>
</div>

<?php

// Visualizar encuestas
if(!isset($rutas[1]) || $rutas[1] == "visualizar-encuestas"){

    $encuestas = ControllerEncuestas::ctrMostrarEncuestas();

    include "views/overall/admin/visualizarEncuestas.php";

    return;
}

// Solicitar administrar encuestas
if($rutas[1] == "solicitar-administrar-encuestas"){

    $encuestas = ControllerEncuestas::ctrMostrarEncuestas();

    include "views/overall/admin/solicitarAdministrarEncuestas.php";

    return;
}

// Crear encuesta
if($rutas[1] == "crear-encuesta"){

    include "views/overall/admin/crearEncuesta.php";

    return;
}

// Editar encuesta
if($rutas[1] == "editar-encuesta"){

    $encuesta = ControllerEncuestas::ctrMostrarEncuestas("slug", $rutas[2]);

    include "views/overall/admin/editarEncuesta.php";

    return;
}

// Enviar encuestas
if($rutas[1] == "enviar-encuestas"){

    include "views/overall/admin/enviarEncuestas.php";

    return;
}