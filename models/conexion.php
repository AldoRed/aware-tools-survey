<?php

class conexion{

    static public function conectar(){

        $link = new PDO("mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

        $link->exec("set names utf8");

        return $link;

    }

}