<?php
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header("Connection: keep-alive");

require_once "../extensions/vendor/autoload.php";

Dotenv\Dotenv::createImmutable(__DIR__ . "/..")->load();

require_once "../controllers/encuestas.controller.php";
require_once "../controllers/email.controller.php";

require_once "../models/encuestas.models.php";
require_once "../models/routes.php";

// Disable output buffering
ini_set('output_buffering', 'off');
ini_set('zlib.output_compression', false);
while (ob_get_level() > 0) {
    ob_end_flush();
}

$token = $_GET['token'] ?? null;

if(!$token){
    echo "event: error\n";
    echo "data: Token not provided}\n\n";
    ob_flush();
    flush();
    exit;
}

// Check if the token is valid
$solicitudes = ControllerEncuestas::ctrMostrarSolicitudesEnviarEncuesta($token);

if(!$solicitudes){
    echo "event: error\n";
    echo "data: Token not valid}\n\n";
    flush();
    exit;
}

$encuestas = array();
$tokenHabilitados = array();

foreach($solicitudes as $key => $value){
    $respuesta = ControllerEncuestas::ctrMostrarEncuestas("id", $value["encuesta"]);
    array_push($encuestas, $respuesta);

    // Token habilitados
    if($respuesta["token_habilitados"] != ""){
        array_push($tokenHabilitados, JSON_decode($respuesta["token_habilitados"], true));
    }else{
        array_push($tokenHabilitados, array());
    }
}

$emails = JSON_decode($solicitudes[0]["emails"], true);

$total = count($emails);
$sent = 0;

// Shuffle to don't send in the same order
shuffle($emails);

foreach ($emails as $key => $value) {
    $token = md5(uniqid(rand(), true));

    // push token to token habilitados
    foreach($tokenHabilitados as $key2 => $value2){
        array_push($value2, $token);
        $tokenHabilitados[$key2] = $value2;
    }

    // send email
    ControllerEmail::ctrEnviarEncuesta($value, $token, $encuestas, $solicitudes[0]["mensaje"]);

    // Update progress
    $sent++;
    echo "event: progress\n";
    echo "data: {\"sent\": $sent, \"total\": $total}\n\n";
    flush();

    // Sleep for 1 second
    sleep(1);
}


// Update token habilitados
foreach($encuestas as $key => $value){
    ControllerEncuestas::ctrActualizarTokenHabilitados($value["id"], JSON_encode($tokenHabilitados[$key]));
}

echo "event: complete\n";
echo "data: ok\n\n";
flush();
