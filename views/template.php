<?php

$rutas = array();
$ruta = null;

if(isset($_GET['ruta'])){
	$rutas = explode("/", $_GET['ruta']);
    $ruta = $rutas[0];
}

$url = Ruta::ctrRuta();

// Encuestas actuales
$encuestas = ControllerEncuestas::ctrMostrarEncuestas();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    if($ruta == "inicio" || $ruta == null){
        echo '<meta name="description" content="Encuestas de investigación de Aware Tools">
              <title>Aware Tools Survey</title>';
    }else{
        foreach ($encuestas as $key => $value) {
            if($ruta == $value['slug']){
                echo '<title>'. $value['nombre'] .'</title>';
                echo '<meta name="description" content="'. $value["descripcion"] .'">';
            }
        }
    }
    ?>
    <meta name="keywords" content="encuestas, investigación, ciberseguridad, cibermadurez, ciberseguridad, ciberseguridad">
    <meta name="author" content="AldoRed">
    <!-- ICON -->
    <link rel="icon" href="<?php echo $url ?>views/img/favicon.ico" type="image/x-icon">
    <!-- Meta tags -->
    <?php

    foreach ($encuestas as $key => $value) {
        if($ruta == $value['slug']){
            echo '<meta property="og:title"   content="'. $value['nombre'] .'">
            <meta property="og:url" content="'. $url.$ruta.'">
            <meta property="og:description" content="'. $value["descripcion"] .'">
            <meta property="og:image"  content="'. $url.$value['imagen'] .'">
            <meta property="og:type"  content="website">	
            <meta property="og:site_name" content="AldoRed">
            <meta property="og:locale" content="es_CL">

            <meta itemprop="name" content="'. $value['nombre'] .'">
            <meta itemprop="url" content="'. $url.$ruta.'">
            <meta itemprop="description" content="'. $value["descripcion"] .'">
            <meta itemprop="image" content="'. $url.$value['imagen'] .'">';
        }
    }
    ?>
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo $url ?>views/css/styles.css?v=3.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $url ?>views/css/plugins/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $url ?>views/css/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>views/css/plugins/fontawesome/css/all.css">

    <!-- JS -->
    <!-- jQuery -->
    <script src="<?php echo $url ?>views/js/plugins/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo $url ?>views/js/plugins/bootstrap.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo $url ?>views/js/plugins/sweetalert.min.js"></script>
</head>
<body>
    <?php  

	$rutas = array();
	$ruta = null;
	$infoProducto = null;

    include "overall/topnav.php";
	
	if (isset($_GET['ruta'])) {

		$rutas = explode("/", $_GET['ruta']);

		$item = "ruta";
		$valor = $rutas[0];
		$ruta = $rutas[0];

        if($ruta == "inicio"){
            include "overall/index.php";
        }elseif($ruta == "admin"){
            include "overall/admin.php";
        }elseif($ruta == "aceptarSolicitudAdministrarEncuestas" && isset($rutas[1])){
            include "overall/admin/aceptarSolicitudAdministrarEncuestas.php";
        }elseif(!isset($_SESSION["consentimiento"]) || $_SESSION["consentimiento"] == false || $ruta == "acuerdo"){
            include "overall/encuesta/acuerdo.php";
        }
        // Si $ruta está incluida en la lista de $encuestas[$i]["ruta"] include "overall/encuesta.php"
        elseif(isset($encuestas) && !empty($encuestas)){
            foreach ($encuestas as $key => $value) {
                if($ruta == $value['slug']){
                    include "overall/encuesta.php";
                    break;
                }
            }
        }
        else{
            include "overall/error404.php";
        }

	}else{
		include "overall/index.php";
	}

    include "overall/footer.php";

	?>
<input type="hidden" id="url" value="<?php echo $url ?>">
<script src="<?php echo $url ?>views/js/encuestas.js?v=3.2"></script>
<script src="<?php echo $url ?>views/js/consentimiento.js?v=2.1"></script>
<script src="<?php echo $url ?>views/js/email.js?v=1.0"></script>

</body>
</html>