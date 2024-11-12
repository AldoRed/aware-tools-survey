<?php

if(isset($_POST["encuestas"])){

    // Token to accept the request
    $token = md5(uniqid(rand(), true));

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
                <h1>Aware Tools Survey</h1>
            </div>
            <div class="content">
                <p><span class="highlight">Nombre:</span> '.$_POST["nombre"].'</p>
                <p><span class="highlight">Email:</span> '.$_POST["email"].'</p>
                <p><span class="highlight">Mensaje:</span> '.$_POST["mensaje"].'</p>
                <p><span class="highlight">Encuestas solicitadas:</span></p>
                <ul class="encuestas-list">';
                
                foreach ($_POST["encuestas"] as $key => $value) {
                    
                    $encuesta = ControllerEncuestas::ctrMostrarEncuestas("id", $value);
            
                    $mensaje .= '<li>'.($key + 1).'. '.$encuesta["nombre"].'</li>';
            
                }

        $mensaje .= '</ul></p>
                <div class="button-container">
                    <a href="'.$url.'aceptarSolicitudAdministrarEncuestas/'.$token.'" class="accept-button">Aceptar solicitud</a>
                </div>
                <div class="footer">
                    <p>Este correo ha sido generado automáticamente por el sistema Aware Tools Survey.</p>
                </div>
        </div>
    </body>';

    // Save the token in the database
    $respuesta = ControllerAdministracion::ctrGuardarSolicitudAdministrarEncuestas($token, JSON_encode($_POST["encuestas"]), $_POST["nombre"], $_POST["email"]);

    // Send the email
    $respuesta = ControllerEmail::ctrEnviarCorreo($_ENV["MAIL_ADMIN"], "Correo automático - Aware Tools Survey", "Solicitud de administrar encuestas", $mensaje);

    return;
}

?>

<section id="solicitarAdministrarEncuestas">
    <div class="container">
        <h2>Solicitar administrar encuestas</h2>
        <form method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <!-- Encuestas que se desean administrar -->
            <div class="form-group">
                <label>Encuestas que desea administrar</label>
                <table>
                    <?php foreach ($encuestas as $value): ?>
                        <tr>
                            <td style="vertical-align: middle;">
                                <input type="checkbox" id="encuesta-<?php echo $value['id']; ?>" name="encuestas[]" value="<?php echo $value['id']; ?>">
                            </td>
                            <td>
                                <label for="encuesta-<?php echo $value['id']; ?>" style="font-weight:100;">
                                    <?php echo htmlspecialchars($value['nombre']); ?>
                                </label>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea class="form-control" name="mensaje" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary enviarEmail">Enviar</button>
</form>


<style>
table {
    border-collapse: collapse;
    width: 100%;
}

table td {
    padding: 5px 10px;
}

table input[type="checkbox"] {
    margin: 0;
}
</style>