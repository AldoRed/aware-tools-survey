<?php

require_once "../extensions/vendor/autoload.php";

Dotenv\Dotenv::createImmutable(__DIR__ . "/..")->load();

require_once "../controllers/encuestas.controller.php";
require_once "../controllers/email.controller.php";

require_once "../models/encuestas.models.php";
require_once "../models/routes.php";

class EnviarEncuestaAjax{

    public $emails;
    public $mensaje;
    public $encuestas;

    public function ajaxEnviarSolicitud(){

        $token = md5(uniqid(rand(), true));

        $encuestas = json_decode($this->encuestas, true);

        foreach($encuestas as $key => $value){

            $encuesta = ControllerEncuestas::ctrMostrarEncuestas("id", $value);

            $administradores = json_decode($encuesta["administradores"], true);

            foreach($administradores as $key => $value){

                ControllerEmail::ctrSolicitudEnviarEncuesta($value, $token, $this->emails, $this->mensaje, $encuesta["nombre"]);

            }

            ControllerEncuestas::ctrGuardarSolicitudEnviarEncuesta($token, $this->emails, $this->mensaje, $encuesta["id"]);

        }

        echo "ok";
    }

}

if(isset($_POST["metodo"])){

    $enviarEncuesta = new EnviarEncuestaAjax();
    $enviarEncuesta -> emails = $_POST["emails"];
    $enviarEncuesta -> mensaje = $_POST["mensaje"];
    $enviarEncuesta -> encuestas = $_POST["encuestas"];
    $enviarEncuesta -> ajaxEnviarSolicitud();

}