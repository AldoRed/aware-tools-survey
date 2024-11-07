<section class="encuestasDisponibles">
<div class="container">
<div class="">
    <img src="views/img/logo.png" style="width:140px;" alt="Logo de Aware Tools" class="logo col-xs-3">
    <h2 class="col-xs-9" style="padding-top: 25px;">Aware Tools Survey</h2>
</div>
<h2 class="col-xs-12">Las encuestas disponibles son:</h2>
<div class="container-fluid">
<?php
foreach ($encuestas as $key => $value) {

    if(isset($_SESSION["encuestas"][$value["ruta"]])){
        $estado = "Completada";
    }else{
        $estado = "No respondida";
    }

    // Create cards with the name of the survey and a link to it
    echo '
    <div class="card col-xs-12 col-sm-6 col-md-4">
      <img src="'.$value["imagen"].'" class="card-img-top" alt="'.$value["nombre"].'">
      <div class="card-body">
        <h5 class="card-title">'.$value["nombre"].'</h5>
        <p class="card-text">'.$estado.'</p>
        <a href="'.$value["ruta"].'" class="btn-card">Entrar</a>
      </div>
    </div>';
}

?>
</div>

</div>
</section>
