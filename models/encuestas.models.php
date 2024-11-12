<?php

require_once "conexion.php";

class ModelEncuestas{

    static public function mdlMostrarEncuestas($tabla, $item, $valor){

        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

        $stmt -> close();

        $stmt = null;

    }

    static public function mdlEditarAdminEncuesta($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET administradores = :admins WHERE id = :id");

        $stmt -> bindParam(":admins", $datos["admins"], PDO::PARAM_STR);
        $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt -> close();

        $stmt = null;
    }
}