<section class="encuestasDisponibles">
<div class="container">
<h2 class="col-xs-12">Las encuestas disponibles son:</h2>
<div class="row container">
<?php
foreach ($encuestas as $key => $value) {

    if(isset($_SESSION["encuestas"][$value["id"]])){
        $estado = "Completada";
    }else{
        $estado = "No respondida";
    }

    // Create cards with the name of the survey and a link to it
    echo '
    <div class="card col-xs-12 col-sm-6 col-md-4">
      <img src="'.$url.$value["imagen"].'" class="card-img-top" alt="'.$value["nombre"].'">
      <div class="card-body">
        <h5 class="card-title">'.$value["nombre"].'</h5>
        <p class="card-text">'.$estado.'</p>
        <a href="'.$value["slug"].'" class="btn-card">Entrar</a>
      </div>
    </div>';
}

?>
</div>

</div>
</section>
