<?php

// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ControllerEmail{

    static public function ctrEnviarCorreo($destinatario, $nombreDestinatario, $asunto, $mensaje){

        $mail = new PHPMailer(true);
        $url = Ruta::ctrRuta();

        try{

            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['MAIL_ADMIN'];
            $mail->Password   = $_ENV['MAIL_ADMIN_PASS'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = $_ENV['SMTP_PORT'];

            // Configuración UTF-8
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
    
            //Recipients
            $mail->setFrom($_ENV['MAIL_ADMIN'], "Aware Tools Survey");
            $mail->addAddress($destinatario, $nombreDestinatario);
    
            // Content
            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body    = $mensaje;
            
            $mail->send();
            
        }catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    static private function templateHead(){
        $url = Ruta::ctrRuta();
        return '
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
                </div>';
    }

    static private function templateFooter(){
        return '<div class="footer">
                    <p>Este correo fue enviado automáticamente por Aware Tools Survey. Por favor, no responda a este mensaje.</p>
                </div>
            </div>
        </body>';
    }

    static public function ctrSolicitudEnviarEncuesta($emailAdmin, $token, $emails, $mensaje, $encuesta){

        $url = Ruta::ctrRuta();

        $emails = json_decode($emails, true);

        $asunto = "Solicitud de encuesta";
        $mensaje = self::templateHead().'
        
            <div class="content">
                <p>Hola Administrador/a, se ha solicitado el envío de la encuesta <span class="highlight">'.$encuesta.'</span> a los administradores de esta.</p>
                <p>El mensaje que se enviará es el siguiente:</p>
                <p><span class="highlight">Mensaje:</span> '.$mensaje.'</p>
                <p>Los correos a los que se enviará la encuesta son:</p>
                <ul class="encuestas-list">';
                
                foreach ($emails as $key => $value) {
                    $mensaje .= '<li>'.($key + 1).'. '.$value.'</li>';
                }

        $mensaje .= '</ul></p>
                <p>Para aceptar, enviar la encuesta anónimamente a cada correo, haga clic en el siguiente enlace:</p>
            </div>
            <div class="button-container">
                <a href="'.$url.'aceptar-y-enviar-encuesta/'.$token.'" class="accept-button">Enviar encuesta</a>
            </div>' . self::templateFooter();

        ControllerEmail::ctrEnviarCorreo($emailAdmin, "Administrador", $asunto, $mensaje);
    }
}