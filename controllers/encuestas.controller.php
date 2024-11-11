<?php

class ControllerEncuestas{

    static public function ctrMostrarEncuestas($item = null, $valor = null){

        $tabla = "encuestas";

        $respuesta = ModelEncuestas::mdlMostrarEncuestas($tabla, $item, $valor);

        return $respuesta;
    }

    static public function ctrCrearCSV($nombre, $formulario, $post){

        if(!file_exists("views/docs/encuestas/".$nombre.".csv")){

            $file = fopen("views/docs/encuestas/".$nombre.".csv", "w");

            $data = array();

            // Write the headers
            foreach($formulario as $key => $value){
                // Write titles of questions
                foreach($value["preguntas"] as $key2 => $value2){
                    array_push($data, $value2["pregunta"]);
                }
            }

            fputcsv($file, $data, ";");

            fclose($file);
        }

        self::ctrGuardarRespuestas($nombre, $formulario, $post);
    }

    static public function ctrGuardarRespuestas($nombre, $formulario, $post){
            
        $file = fopen("views/docs/encuestas/".$nombre.".csv", "a");

        $data = array();

        foreach($formulario as $key => $value){
            foreach($value["preguntas"] as $key2 => $value2){

                if(isset($post["pregunta-".$key."-".$key2])){
                    $answer = $post["pregunta-".$key."-".$key2];

                    if(is_array($answer)){
                        $answer = implode(",", $answer);
                    }

                    array_push($data, $answer);

                    if(strpos($answer, "Otro") !== false){
                        $data[count($data) - 1] .= ": ".$post["pregunta-especificar-".$key."-".$key2];
                    }
                }else{
                    array_push($data, "");
                }
            }
        }

        fputcsv($file, $data, ";");

        fclose($file);
    }
}