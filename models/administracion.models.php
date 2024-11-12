<?php

class ModelAdministracion {

    static public function mdlMostrarSolicitudAdministrarEncuestas($tabla, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE token = :token LIMIT 1");

        $stmt -> bindParam(":token", $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();

        $stmt = null;
    }

    static public function mdlGuardarSolicitudAdministrarEncuestas($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, encuestas, nombre, email) VALUES (:token, :encuestas, :nombre, :email)");

        $stmt -> bindParam(":token", $datos["token"], PDO::PARAM_STR);
        $stmt -> bindParam(":encuestas", $datos["encuestas"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt -> close();

        $stmt = null;
    }
}