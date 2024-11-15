<?php

if(isset($rutas[1])){
    include "encuesta/disponibles.php";

    return;
}

?>



<!-- Contenido centrado -->
<main class="flex-fill d-flex align-items-center justify-content-center text-center" style="height: 100vh;">
    <div class="centrar-contenido">
        <h1 class="text-primary">Bienvenido/a</h1>
        <p class="mb-4">Bienvenido/a a la plataforma de encuestas de Aware Tools. Aquí podrás responder, enviar, crear encuestas y ver resultados.</p>
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
    </div>
</main>