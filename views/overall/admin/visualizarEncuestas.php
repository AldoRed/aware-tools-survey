<div class="container">
<h2 class="">Las encuestas aprobadas son:</h2>
<div class="row">
<?php
foreach ($encuestas as $key => $value) {

    // Create cards with the name of the survey and a link to it
    echo '
    <div class="card col-xs-12 col-sm-6 col-md-4">
      <img src="'.$url.$value["imagen"].'" class="card-img-top" alt="'.$value["nombre"].'">
      <div class="card-body">
        <h5 class="card-title">'.$value["nombre"].'</h5>

        <div class="row">
            <div class="col-xs-6">
                <center>
                <a href="'.$url.$value["slug"].'" class="btn btn-default">Ver</a>
                </center>
            </div>
            <div class="col-xs-6">
                <center>
                <a href="'.$url.'admin/editar-encuesta/'.$value["slug"].'" class="btn btn-default">Editar</a>
                </center>
            </div>
        </div>
      </div>
    </div>';
}

?>
</div>

</div>