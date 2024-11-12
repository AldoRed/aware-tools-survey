<?php

class ControllerSecciones {

    static public function ctrMostrarSecciones($item = null, $valor = null){

        $tabla = "secciones";

        $respuesta = ModelSecciones::mdlMostrarSecciones($tabla, $item, $valor);

        return $respuesta;

    }
}