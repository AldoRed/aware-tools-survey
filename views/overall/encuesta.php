<?php

$encuesta = $encuestas[$key];

// Temporalmente se agrega manualmente el array de preguntas frecuentes
$preguntas = array(["¿Los datos donde quedan registrados?", "Los registros se almacenan en un archivo csv, el cual puedes descargar <a href='views/docs/resultadosColores.csv'>Aquí</a>"],
                                        ["¿Qué datos serán requeridos?", "Edad, enfermedades que afecten a su visión y sexo"],
                                     ["¿Existe algún requisito para contestar la encuesta?", "No hay requisitos para contestar encuesta."],
                                     ["¿Quiénes somos?", "Somos un grupo de cuatro estudiantes de la Universidad Adolfo Ibañez de Viña del Mar. <b><br> Matthias Dietert.<br> Diego Figueroa.<br> Matias Orozco.<br> Aldo Muñoz.</b>"]);
include "views/overall/encuesta/formularios/centroConCapacidades.php";
include "views/overall/encuesta/formularios/demandaDeCapacidades.php";
// include "views/overall/encuesta/formularios/usoDeFondos.php";


$formulario = $formulario[$encuesta["id"]];

?>

<center>
<div id="resultados">
    <?php 
        
        if(isset($_POST["r"])){
            
            $myfile = fopen("views/docs/resultadosColores.csv", "a");
            $nuevaData = $_POST["r"] ."\n";
            fwrite($myfile, $nuevaData);
            fclose($myfile);
            
            $resultados = explode(",",$_POST["r"]);
            $promedio_error = 0;
            $promedio_tiempo = 0;
            $mejor_tiempo = $resultados[5];
            $menor_error = $resultados[6];
            
            foreach($resultados as $key => $value){
                
                //Despues del ejercicio de prueba
                if($key >= 5){
                    if($key%2 != 0){
                        $promedio_tiempo += $value;
                        
                        if($mejor_tiempo > $value){
                            $mejor_tiempo = $value;
                        }
                    }else{
                        $promedio_error += $value;
                        
                        if($menor_error > $value){
                            $menor_error = $value;
                        }
                    }
                }
            }
            
            $promedio_error /= 5;
            $promedio_tiempo /= 5;
            
            echo '
            <section class="questions__offer" style="margin-bottom:10px;">
                <a href="'.$url.'"><h2 class="subtitle">Volver página principal</h2></a>
            </section>
            ';
        
            return;
        }
        
        
        ?>
</div>
<div id="main">
    
    <header class="hero">
    <nav class="nav container">
        <div class="nav_logo">
            <h2 class="nav_title"><img src="views/img/logo.png" style="width:60px;" alt="Logo de Aware Tools"></h2>
        </div>
        
        <div class="nav_menu">
            <img src="">
        </div>
    </nav>
    
    <section class="hero_container container">
        <h1 class="hero_title"><?php echo $encuesta["nombre"] ?></h1>
        <p class="hero_paragraph"><b>Encuestas 100% anónimas</b></p>
        <p class="hero_paragraph"></p>
        <a class="contestar_enc cta">Contestar encuesta</a>
    </section>
</header>


<main>
        <section class="container about">
            <h2 class="subtitle">¿Cuál es nuestro objetivo?</h2>
            <p class="about__paragraph" style="text-align: justify;">En este estudio, buscamos levantar las capacidades de ciberseguridad que los centros podrían tener,
entendiendo que la ciberseguridad es transversal. El objetivo es identificar nodos a nivel nacional
que puedan convertirse en una red nacional de investigación en ciberseguridad, permitiendo que las
comunidades de equipos de investigación desarrollen proyectos conjuntos en apoyo al Pilar 5 de la
PNC.</p>

            <div class="about__main">
                <article class="about__icons">
                    <i class="fas fa-brush about_icon" aria-hidden="true"></i>
                    <h3 class="about__title">Encuesta</h3>
                    <p class="about__paragrah"></p>
                </article>

                <article class="about__icons">
                    <i class="fas fa-glasses about_icon" aria-hidden="true"></i>
                    <h3 class="about__title">Recopilación</h3>
                    <p class="about__paragrah"></p>
                </article>

                <article class="about__icons">
                    <i class="fas fa-chart-line about_icon" aria-hidden="true"></i>
                    <h3 class="about__title">Analisis y conclusiones</h3>
                    <p class="about__paragrah"></p>
                </article>
            </div>
        </section>

        
        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Algunas preguntas y respuestas que quizas te puedas haber hecho.</p>

            <section class="questions__container">

                <?php

                foreach($preguntas as $key => $pregunta){
                    echo '
                    <article class="questions__padding">
                        <div class="questions__answer">
                            <h3 class="questions__title">'.$pregunta[0].'
                                <span class="questions__arrow">
                                    <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                                </span> 
                            </h3>

                            <p class="questions__show">'.$pregunta[1].'</p>
                        </div>
                    </article>
                    ';
                }

                ?>

            </section>

            <section class="questions__offer" style="margin-bottom:10px;">
                <h2 class="subtitle">¿Estas listo para realizar encuesta?</h2>
                <a class="cta contestar_enc">Contestar encuesta</a>
            </section>
            
            <br><br><br>
        </section>
    </main>
    
</div>
<style>

    .hero::before{
        content: "";
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url(<?php echo $encuesta["imagen"] ?>);
        background-size:cover;
        clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 95%, 0 80%);
        z-index:-1;
    }
    
</style>

<form role="form" method="post" name="encuesta_form">
    
<?php

foreach($formulario as $keySeccion => $seccion){
    
    echo '
    <section class="questions container seccion_'.$keySeccion.' noDisplay">
        <h2 class="subtitle">'.$seccion["seccion"].'</h2>
        <p class="questions__paragraph">Por favor responda las siguientes preguntas</p>
    ';
    
    foreach($seccion["preguntas"] as $keyPregunta => $pregunta){
        
        echo '
        <fieldset class="container" style="text-align:left;">
            <h3>'.($keyPregunta+1) .'. '. $pregunta["pregunta"].'</h3>
        ';

        if($pregunta["tipo"] == "radio"){
            
            foreach($pregunta["alternativas"] as $key => $alternativa){
                
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer;" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" value="'.$alternativa.'" class="alternativaInput noDisplay" type="radio">
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input style="margin-left:19px;" type="text" name="pregunta-especificar-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "radioMultiple"){

            foreach($pregunta["alternativas"] as $key => $alternativa){
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer; padding-bottom: 20px;" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" value="'.$alternativa.'" class="alternativaInput noDisplay" type="checkbox">
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input style="margin-left:19px; width:80%;" type="text" name="pregunta-especificar-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "text"){

            echo '<input type="text" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" placeholder="Escribir respuesta aquí">';
        }else{
            echo "Tipo de pregunta no soportada";
        }
        
        echo '</fieldset>';
    }

    echo '</br></br>';
    // Botón de siguiente
    if($keySeccion < count($formulario)-1){
        echo '
        <p class="siguiente" siguiente="'.($keySeccion+1).'">
            <button type="button" class="btn">
                Siguiente
            </button>
        <p>
        ';
    }else{
        // Botón de enviar
        echo '
        <button type="submit" class="btn">
            Enviar
        </button>';
    }

    echo '</br></br></br></br></section>';
}


?>
</form>

</center>