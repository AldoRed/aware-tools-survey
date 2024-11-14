<?php

if(isset($_POST["pregunta-0-0"])){

    if(!isset($_SESSION["encuestas"][$encuesta["id"]]) && isset($rutas[1])){

        $token = $rutas[1];

        $tokenHabilitados = JSON_decode($encuesta["token_habilitados"], true);

        if($tokenHabilitados == null || !in_array($token, $tokenHabilitados)){
            echo '<script>
                Swal.fire({
                    title: "¡Token inválido!",
                    icon: "warning",
                    confirmButtonText: "Cerrar"
                }).then((result) => {
                    if(result.value){
                        window.location = "'.$url.'inicio/'.$token.'";
                    }
                });
            </script>';
            return;
        }

        ControllerEncuestas::ctrCrearCSV($encuesta["slug"], $formulario, $_POST);

        // Remove the token from the list of available tokens
        $tokenHabilitados = array_diff($tokenHabilitados, array($rutas[1]));

        $tokenHabilitados = JSON_encode($tokenHabilitados);

        ControllerEncuestas::ctrEditarEncuesta($encuesta["id"], "token_habilitados", $tokenHabilitados);

        // Add to respuesta column the token of the user who answered the survey
        // If $encuesta["respuestas"] is null, create an empty array
        $respuestas = $encuesta["respuestas"] == null ? array() : JSON_decode($encuesta["respuestas"], true);
        
        array_push($respuestas, $rutas[1]);
        $respuestas = JSON_encode($respuestas);

        ControllerEncuestas::ctrEditarEncuesta($encuesta["id"], "respuestas", $respuestas);

        $_SESSION["encuestas"][$encuesta["id"]] = 1;

        echo '
            <script>
                Swal.fire({
                    title: "¡Encuesta enviada!",
                    text: "Gracias por participar en la encuesta.",
                    icon: "success",
                    confirmButtonText: "Cerrar"
                }).then((result) => {
                    if(result.value){
                        window.location = "'.$url.'inicio/'.$token.'";
                    }
                });
            </script>
        ';
    }else{
        if(isset($_SESSION["encuestas"][$encuesta["id"]])){
            echo '<script>
                Swal.fire({
                    title: "¡Encuesta ya contestada!",
                    text: "Ya has enviado la encuesta.",
                    icon: "warning",
                    confirmButtonText: "Cerrar"
                }).then((result) => {
                    if(result.value){
                        window.location = "'.$url.'inicio/'.$rutas[1].'";
                    }
                });
            </script>';
        }else{
            echo '<script>
                    Swal.fire({
                        title: "¡Encuesta en modo de prueba!",
                        text: "No se puede enviar la encuesta en modo de prueba.",
                        icon: "warning",
                        confirmButtonText: "Cerrar"
                    });
                </script>';
        }
    }
}