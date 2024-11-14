<div class="container">
<h2 class="">Las encuestas aprobadas son:</h2>
<ul class="list-group">
<?php
foreach ($encuestas as $key => $value) {

    // Create cards with the name of the survey and a link to it
    echo '
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-2">
                    <img src="'.$url.$value["imagen"].'" class="img-responsive img-thumbnail" alt="'.$value["nombre"].'">
                </div>
                <div class="col-sm-8">
                    <h4>'.$value["nombre"].'</h4>
                    <p>'.$value["descripcion"].'</p>
                </div>
                <div class="col-sm-2 text-right">
                    <a href="'.$url.$value["slug"].'" class="btn btn-primary btn-sm">Ver</a>
                    <a href="'.$url.'admin/editar-encuesta/'.$value["slug"].'" class="btn btn-secondary btn-sm">Editar</a>
                </div>
            </div>
        </li>';
    
}

?>
</ul>

</div>

<style>
.list-group-item {
    margin-bottom: 10px;
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.list-group-item img {
    max-height: 80px;
}

.list-group-item h4 {
    margin-top: 0;
    margin-bottom: 5px;
    font-weight: bold;
}
</style>