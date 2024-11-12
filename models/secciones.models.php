<?php

class ModelSecciones{

    static public function mdlMostrarSecciones($tabla, $item, $valor){

        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        }

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt -> close();

        $stmt = null;

    }

}