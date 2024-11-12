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
}