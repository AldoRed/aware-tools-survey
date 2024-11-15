<?php

class ControllerAdministracion {

    static public function ctrMostrarSolicitudAdministrarEncuestas($token){

        $tabla = "solicitudes_administrar_encuestas";

        $respuesta = ModelAdministracion::mdlMostrarSolicitudAdministrarEncuestas($tabla, $token);

        return $respuesta;
    }

    static public function ctrGuardarSolicitudAdministrarEncuestas($token, $encuestas, $nombre, $email){

        $tabla = "solicitudes_administrar_encuestas";

        $datos = array(
            "token" => $token,
            "encuestas" => $encuestas,
            "nombre" => $nombre,
            "email" => $email
        );

        $respuesta = ModelAdministracion::mdlGuardarSolicitudAdministrarEncuestas($tabla, $datos);

        return $respuesta;
    }

    static public function ctrIngresoPin(){

        if(isset($_POST["pin"]) && $_POST["pin"] != ""){

            if($_POST["pin"] == $_ENV["PIN_ADMINISTRACION"]){
                $_SESSION["admin"] = "ok";

                echo '<script>

                    window.reload();

                </script>';

            }else{

                echo '<script>
                
                    Swal.fire({
                        icon: "error",
                        title: "¡Error!",
                        text: "¡El PIN es incorrecto!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    </script>';

            }

        }
    }
}