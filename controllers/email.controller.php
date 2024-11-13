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
}