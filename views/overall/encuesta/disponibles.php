<?php

$token = $rutas[1];

$disponibles = array();

foreach($encuestas as $key => $value){
    $tokenHabilitados = $value["token_habilitados"] ? JSON_decode($value["token_habilitados"], true) : array();
    $tokenRespuestas = $value["respuestas"] ? JSON_decode($value["respuestas"], true) : array();
    if(in_array($token, $tokenHabilitados)){
        array_push($disponibles, $value);
    }
    if(in_array($token, $tokenRespuestas)){
        array_push($disponibles, $value);
    }
}

$encuestas = $disponibles;
?>

<div class="container">
    <h2 class="text-center text-primary mb-4">Las encuestas disponibles son:</h2>
    <ul class="list-group">
<?php
foreach ($encuestas as $key => $value) {

    if(isset($_SESSION["encuestas"][$value["id"]])){
        $estado = "<span class='text-success'>Respondida</span>";
    }else{
        $estado = "<span class='text-warning'>Pendiente</span>";
    }

 
    echo '
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-2">
                    <img src="'.$url.$value["imagen"].'" class="img-responsive img-thumbnail" alt="'.$value["nombre"].'">
                </div>
                <div class="col-sm-8">
                    <h4>'.$value["nombre"].'</h4>
                    <p>'.$value["descripcion"].'</p>
                    <b>'.$estado.'</b>
                </div>
                <div class="col-sm-2 text-right">
                    <a href="'.$url.$value["slug"].'/'.$token.'" class="btn btn-primary btn-sm">Responder</a>
                </div>
            </div>
        </li>';
}

?>
</div>

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