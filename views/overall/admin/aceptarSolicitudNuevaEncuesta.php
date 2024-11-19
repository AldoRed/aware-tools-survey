<script>
    Swal.fire({
        title: 'Aprobando encuesta',
        text: 'Por favor espere...',
        allowOutsideClick: false,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    });
</script>
<?php

$token = $rutas[1];

$respuesta = ControllerEncuestas::ctrMostrarEncuestasNoAprobadas($token);

if(!$respuesta){

    echo '<script>
        window.location = "'.$url.'inicio";
    </script>';

    return;
}

$datos = array("nombre" => $respuesta["nombre"],
                "slug" => $respuesta["slug"],
                "descripcion" => $respuesta["descripcion"],
                "imagen" => $respuesta["imagen"],
                "secciones" => $respuesta["secciones"],
                "cronometro" => $respuesta["cronometro"],
                "administradores" => '["'.$respuesta["creador"].'"]');

$respuestaEncuesta = ControllerEncuestas::ctrCrearEncuestaAprobada($datos);

if($respuestaEncuesta == "ok"){ 

    $respuestaElminar = ControllerEncuestas::ctrEliminarEncuestaNoAprobada($token);

    if($respuestaElminar == "ok"){

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
                    <p>La encuesta <span class="highlight">'.$respuesta["nombre"].'</span> ha sido aprobada y ya está disponible para ser respondida.</p>
                    <p>Usted es el administrador de esta encuesta.</p>
                    <p>Para ir a administración vaya a:</p>
                    <ul class="encuestas-list">
                        <li>
                            <a href="'.$url.'admin">Administrar encuestas</a>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <p>Este mensaje fue enviado automáticamente por el sistema, por favor no responda este mensaje.</p>
                </div>
            </div>
        </body>';

        ControllerEmail::ctrEnviarCorreo($respuesta["creador"], "Nueva encuesta aprobada", "Encuesta aprobada", $mensaje);

        echo '<script>
            window.location = "'.$url.'admin";
        </script>';

    }

}