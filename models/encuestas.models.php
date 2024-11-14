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

    static public function mdlMostrarEncuestasNoAprobadas($tabla, $token){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE token = :token");

        $stmt -> bindParam(":token", $token, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();

        $stmt = null;

    }

    static public function mdlCrearEncuesta($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, nombre, slug, descripcion, imagen, secciones, creador) VALUES (:token, :nombre, :slug, :descripcion, :imagen, :secciones, :correoCreador)");

        $stmt -> bindParam(":token", $datos["token"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":slug", $datos["slug"], PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        $stmt -> bindParam(":secciones", $datos["secciones"], PDO::PARAM_STR);
        $stmt -> bindParam(":correoCreador", $datos["correoCreador"], PDO::PARAM_STR);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt -> close();

        $stmt = null;
    }

    static public function mdlCrearEncuestaAprobada($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, slug, descripcion, imagen, secciones, administradores) VALUES (:nombre, :slug, :descripcion, :imagen, :secciones, :administradores)");

        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":slug", $datos["slug"], PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        $stmt -> bindParam(":secciones", $datos["secciones"], PDO::PARAM_STR);
        $stmt -> bindParam(":administradores", $datos["administradores"], PDO::PARAM_STR);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

    }

    static public function mdlCheckearSlug($tabla, $slug){

        $stmt = Conexion::conectar()->prepare("SELECT slug FROM $tabla WHERE slug = :slug");

        $stmt->bindParam(":slug", $slug, PDO::PARAM_STR);

        $stmt->execute();

        $result = $stmt->fetch();

        $stmt->closeCursor();

        return $result ? 1 : 0;
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

    static public function mdlEditarEncuesta($tabla, $id, $item, $valor){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :$item WHERE id = :id");

        $stmt -> bindParam(":$item", $valor, PDO::PARAM_STR);
        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt -> close();

        $stmt = null;
    }

    static public function mdlEliminarEncuestaNoAprobada($tabla, $token){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE token = :token LIMIT 1");

        $stmt -> bindParam(":token", $token, PDO::PARAM_STR);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt -> close();

        $stmt = null;
    }
}