<?php

$token = $rutas[1];

$respuesta = ControllerAdministracion::ctrMostrarSolicitudAdministrarEncuestas($token);

if(!$respuesta){

    echo '<script>
        window.location = "'.$url.'404"
    </script>';

    return;
}

$encuestasAceptadas = json_decode($respuesta["encuestas"], true);

$encuestas = ControllerEncuestas::ctrMostrarEncuestas();

foreach ($encuestas as $key => $value) {
    if(in_array($value["id"], $encuestasAceptadas)){

        // Si está vacío, se crea un array vacío
        if($value["administradores"] == ""){
            $administradoresActuales = array();
        }else{
            $administradoresActuales = json_decode($value["administradores"], true);
        }

        if(!in_array($respuesta["email"], $administradoresActuales)){
            array_push($administradoresActuales, $respuesta["email"]);
        }

        $datos = array(
            "id" => $value["id"],
            "admins" => json_encode($administradoresActuales)
        );

        ControllerEncuestas::ctrEditarAdminEncuesta($datos);
    }
}

// Eliminar solicitud - Pendiente
// ControllerAdministracion::ctrEliminarSolicitudAdministrarEncuestas($token);

// Send email to the user
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
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f5f5f5;
        }
        .encuestas-list li a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .encuestas-list li a:hover {
            text-decoration: underline;
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
            <p>Estimado/a <span class="highlight">'.$respuesta["nombre"].'</span>,</p>
            <p>Nos complace informarle que su solicitud para administrar las siguientes encuestas ha sido aprobada por el administrador:</p>
            <ul class="encuestas-list">';

                foreach ($encuestas as $key => $value) {
                    if(in_array($value["id"], $encuestasAceptadas)){
                        $mensaje .= '<li>
                            <span>'.$value["nombre"].'</span><br>
                            <a href="'.$url.$value["slug"].'" target="_blank">Acceder a la encuesta</a>
                        </li>';
                    }
                }

$mensaje .= '</ul>
            <p>Puede acceder directamente a las encuestas desde los enlaces proporcionados.</p>
        </div>
        <div class="footer">
            <p>Este correo ha sido generado automáticamente por el sistema Aware Tools Survey.</p>
        </div>
    </div>
</body>';

$asunto = "Solicitud Aprobada - Encuestas Administradas";

ControllerEmail::ctrEnviarCorreo($respuesta["email"], $respuesta["nombre"], $asunto, $mensaje);

echo '
<script>
    Swal.fire({
        title: "¡Solicitud Aprobada!",
        text: "Se ha enviado un correo al solicitante con la información necesaria.",
        icon: "success",
        showConfirmButton: false,
        timer: 2000
    }).then(function(){
        // Close the window
        window.close();
    });
';