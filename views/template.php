<?php

$rutas = array();
$ruta = null;

if(isset($_GET['ruta'])){
	$rutas = explode("/", $_GET['ruta']);
    $ruta = $rutas[0];
}

$url = Ruta::ctrRuta();

// Encuestas actuales
$encuestas = array();
$encuestas[0]["id"] = 1;
$encuestas[0]["nombre"] = "Demanda de Capacidades I+D en Ciberseguridad de parte de los sectores Información General";
$encuestas[0]["ruta"] = "demanda-de-capacidades-i-d-en-ciberseguridad-de-parte-de-los-sectores-informacion-general";
$encuestas[0]["imagen"] = "views/img/encuestas/encuesta2.webp";
$encuestas[1]["id"] = 2;
$encuestas[1]["nombre"] = "Centro con Capacidades I+D en Ciberseguridad";
$encuestas[1]["ruta"] = "centro-con-capacidades-i-d-en-ciberseguridad";
$encuestas[1]["imagen"] = "views/img/encuestas/encuesta1.webp";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aware Tools Survey</title>
    <meta name="description" content="Encuestas de investigación de Aware Tools">
    <meta name="keywords" content="encuestas, investigación, ciberseguridad, cibermadurez, ciberseguridad, ciberseguridad">
    <meta name="author" content="AldoRed">
    <!-- ICON -->
    <link rel="icon" href="<?php $url ?>views/img/favicon.ico" type="image/x-icon">
    <!-- Meta tags -->
    <?php

    foreach ($encuestas as $key => $value) {
        if($ruta == $value['ruta']){
            echo '<meta property="og:title"   content="'. $value['nombre'] .'">
            <meta property="og:url" content="'. $url.$ruta.'">
            <meta property="og:description" content="Encuestas de investigación de Aware Tools">
            <meta property="og:image"  content="https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <meta property="og:type"  content="website">	
            <meta property="og:site_name" content="AldoRed">
            <meta property="og:locale" content="es_CL">

            <meta itemprop="name" content="'. $value['nombre'] .'">
            <meta itemprop="url" content="'. $url.$ruta.'">
            <meta itemprop="description" content="Encuestas de investigación de Aware Tools">
            <meta itemprop="image" content="https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">';
        }
    }
    ?>
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php $url ?>views/css/styles.css?v=2.1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php $url ?>views/css/plugins/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php $url ?>views/css/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php $url ?>views/css/plugins/fontawesome/css/all.css">

    <!-- JS -->
    <!-- jQuery -->
    <script src="<?php $url ?>views/js/plugins/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php $url ?>views/js/plugins/bootstrap.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php $url ?>views/js/plugins/sweetalert.min.js"></script>
</head>
<body>
    <?php  

	$rutas = array();
	$ruta = null;
	$infoProducto = null;
	
	if (isset($_GET['ruta'])) {

		$rutas = explode("/", $_GET['ruta']);

		$item = "ruta";
		$valor = $rutas[0];
		$ruta = $rutas[0];

        if($ruta == "inicio"){
            include "overall/index.php";
        }elseif(!isset($_SESSION["consentimiento"]) || $_SESSION["consentimiento"] == false || $ruta == "acuerdo"){
            include "overall/encuesta/acuerdo.php";
        }
        // Si $ruta está incluida en la lista de $encuestas[$i]["ruta"] include "overall/encuesta.php"
        elseif(isset($encuestas) && !empty($encuestas)){
            foreach ($encuestas as $key => $value) {
                if($ruta == $value['ruta']){
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

<script src="views/js/encuestas.js?v=2.0"></script>
<script src="views/js/consentimiento.js?v=2.0"></script>

</body>
</html>