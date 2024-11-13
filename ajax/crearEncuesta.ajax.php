<?php

require_once "../extensions/vendor/autoload.php";

Dotenv\Dotenv::createImmutable(__DIR__ . "/..")->load();

require_once "../controllers/encuestas.controller.php";
require_once "../controllers/email.controller.php";

require_once "../models/encuestas.models.php";
require_once "../models/routes.php";

class CrearEncuestaAjax{

    public $nombre;
    public $descripcion;
    public $imagen;
    public $secciones;
    public $correoCreador;
    public $slug;


    public function ajaxCheckearSlug(){

        $respuesta = ControllerEncuestas::ctrCheckearSlug($this->slug);

        if($respuesta){
            echo 1;
        }else{
            echo 0;
        }
        
    }

    public function ajaxCrearEncuesta(){

        $token = md5(uniqid(rand(), true));

        // Guardar imagen en el servidor
        $ruta = "../views/img/encuestas/".$this->slug.$this->imagen["name"];
        
        move_uploaded_file($this->imagen["tmp_name"], $ruta);

        $datos = array(
            "token" => $token,
            "nombre" => $this->nombre,
            "slug" => $this->slug,
            "imagen" => $ruta,
            "descripcion" => $this->descripcion,
            "secciones" => $this->secciones,
            "correoCreador" => $this->correoCreador
        );

        $respuesta = ControllerEncuestas::ctrCrearEncuesta($datos);

        $url = Ruta::ctrRuta();

        if($respuesta == "ok"){
            // Enviar correo al administrador para aprobar la encuesta
            $mensaje = '
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f9f9f9;
                        margin: 0;
                        padding: 0;
                        color: #333;
                    }
                    .email-container {
                        background-color: #ffffff;
                        margin: 20px auto;
                        padding: 20px;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        max-width: 600px;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }
                    .header {
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    .header img {
                        max-width: 100px;
                        margin-bottom: 10px;
                    }
                    .header h1 {
                        font-size: 24px;
                        color: #333;
                        margin: 0;
                    }
                    .content {
                        line-height: 1.6;
                    }
                    .content p {
                        margin: 10px 0;
                    }
                    .highlight {
                        font-weight: bold;
                        color: #0056b3;
                    }
                    .encuestas-list {
                        margin: 10px 0;
                        padding: 0;
                        list-style-type: none;
                    }
                    .encuestas-list li {
                        margin: 5px 0;
                        padding: 10px;
                        border: 1px solid #ddd;
                        border-radius: 4px;
                        background-color: #f5f5f5;
                    }
                    .button-container {
                        text-align: center;
                        margin-top: 20px;
                    }
                    .accept-button {
                        background-color: #007bff;
                        color: white;
                        padding: 10px 20px;
                        text-decoration: none;
                        border-radius: 5px;
                        font-size: 16px;
                        font-weight: bold;
                    }
                    .accept-button:hover {
                        background-color: #0056b3;
                    }
                    .footer {
                        text-align: center;
                        margin-top: 20px;
                        font-size: 12px;
                        color: #666;
                    }
                </style>
            </head>
            <body>
                <div class="email-container">
                    <div class="header">
                        <img src="'.$url .'views/img/logo.png" alt="Aware Tools Survey Icon">
                        <h1>Solicitud Aprobada</h1>
                    </div>
                    <div class="content">
                        <p>Estimado/a <span class="highlight">Administrador/a</span>,</p>
                        <p>Nos complace informarle que <span class="highlight">'.$this->correoCreador.'</span> ha solicitado crear la encuesta <span class="highlight">'.$this->nombre.'</span>.</p>
                        <p>Para aprobar la solicitud, haga clic en el siguiente enlace:</p>';

            $mensaje .= '
                    </div>
                    <div class="button-container">
                        <a href="'.$url.'aceptarSolicitudNuevaEncuesta/'.$token.'" class="accept-button">Aceptar Encuesta</a>
                    </div>
                    <div class="footer">
                        <p>Este correo ha sido generado automáticamente por el sistema Aware Tools Survey.</p>
                    </div>
                </div>
            </body>';

            $asunto = "Solicitud de creación de encuesta";

            ControllerEmail::ctrEnviarCorreo($_ENV["MAIL_ADMIN"], "SISTEMA", $asunto, $mensaje);
        
        }

        echo $respuesta;

    }
}

if(isset($_POST["metodo"])){

    if($_POST["metodo"] == "checkearSlug"){

        $checkearSlug = new CrearEncuestaAjax();
        $checkearSlug -> slug = $_POST["slug"];
        $checkearSlug -> ajaxCheckearSlug();

    }

    if($_POST["metodo"] == "crearEncuesta"){

        $crearEncuesta = new CrearEncuestaAjax();
        $crearEncuesta -> nombre = $_POST["nombreEncuesta"];
        $crearEncuesta -> slug = $_POST["slugEncuesta"];
        $crearEncuesta -> descripcion = $_POST["descripcionEncuesta"];
        $crearEncuesta -> imagen = $_FILES["imagenEncuesta"];
        $crearEncuesta -> secciones = $_POST["secciones"];
        $crearEncuesta -> correoCreador = $_POST["correoCreador"];
        $crearEncuesta -> ajaxCrearEncuesta();

    }
}