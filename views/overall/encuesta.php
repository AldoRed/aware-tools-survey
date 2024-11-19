<?php

$encuesta = $encuestas[$key];

// Temporalmente se agrega manualmente el array de preguntas frecuentes
$preguntas = array(
                [    
                    "PROCEDIMIENTO",
                    "La investigación propuesta consiste en realizar un estudio a partir de información agregada obtenida del llenado de encuestas de múltiples instituciones que tienen necesidades de ciberseguridad de manera de visibilizar áreas prioritarias de investigación en ciberseguridad en el País. Su tarea consiste en responder lo más fielmente que pueda a las preguntas formuladas."],
                [
                    "RIESGOS ASOCIADOS",
                    "Su participación en este estudio implica un riesgo mínimo. Si bien usted al responder revela cierta información privada, la información recopilada mediante los cuestionarios será tratada de manera confidencial, resguardando la privacidad y confidencialidad de los datos de manera desagregada así como de los participantes."
                ],
                [
                    "BENEFICIOS",
                    "Los resultados de esta investigación serán utilizados para mejorar la comprensión de las necesidades y prioridades en ciberseguridad en Chile. Como resultado de participar en este estudio, se espera generar un informe con información agregada respecto de los resultados de la investigación."
                ],
                [
                    "CONFIDENCIALIDAD",
                    "Sólo el equipo de investigación y mandante tendrá acceso a los nombres de los participantes. Los datos serán anonimizados y tratados de manera confidencial."
                ],
                [
                    "VOLUNTARIEDAD",
                    "Su participación en este estudio es voluntaria. Usted tiene la libertad de retirarse de él cuando lo desee. Su retiro no significa que no pueda participar en otro de nuestros estudios en el futuro, si usted así lo decide. La asesora  puede detener el estudio si lo considera necesario, así como la participación de usted si lo requiere por cualquier razón."
                ]);
include "views/overall/encuesta/formularios/centroConCapacidades.php";
include "views/overall/encuesta/formularios/demandaDeCapacidades.php";
// include "views/overall/encuesta/formularios/usoDeFondos.php";

$secciones = JSON_decode($encuesta["secciones"], true);

if(!$secciones){
    // Si no hay secciones, mostrar un recuadro de error con un boton de ir a editar encuesta
    echo '
    <div class="alert alert-danger" role="alert">
        No se han encontrado secciones para esta encuesta. Por favor, edite la encuesta y agregue secciones. <a href="'.$url.'admin/editar-encuesta/'.$encuesta["slug"].'">Editar encuesta</a>
    </div>
    ';
    return;
}

if(!isset($rutas[1])){
    // Si la encuesta no tiene ningún token, informar que solo es una vista previa. No se guardará ninguna respuesta
    echo '
    <div class="alert alert-warning" role="alert">
        Esta es una vista previa de la encuesta. No se guardarán respuestas. <a href="'.$url.'admin">Volver a administración</a>
    </div>';
    
}

$formulario = $secciones;

?>

<center>
<div id="resultados">
    <?php 
    
    include "views/overall/encuesta/resultados.php";
        
    ?>
</div>
<div id="main">
    
    <header class="hero">
    <nav class="nav container">
        
        
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
            <h2 class="subtitle">Descripción</h2>
            <p class="about__paragraph" style="text-align: center;"><?php echo $encuesta["descripcion"] ?></p>

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
            <h2 class="subtitle">Consentimiento Informado</h2>
            <p class="questions__paragraph">Puedes modificar tu consentimiento en cualquier momento <a href="<?php echo $url ?>acuerdo">aquí</a></p>

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
        background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url('<?php echo $url . $encuesta["imagen"] ?>');
        background-size:cover;
        clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 95%, 0 80%);
        z-index:-1;
    }
    
</style>

<form role="form" method="post" name="encuesta_form">

<div id="cronometro-container" style="display: none;">
    <i id="cronometro-icon" class="fas fa-clock"></i>
    <span id="cronometro">00:00</span>
</div>

<?php

// Cronometro
echo '
<input type="hidden" name="cronometro" value="'.$encuesta["cronometro"].'">
';

foreach($formulario as $keySeccion => $seccion){
    
    echo '
    <section class="questions container seccion_'.$keySeccion.' noDisplay">
        <h2 class="subtitle">'.$seccion["nombre"].'</h2>
        <p class="questions__paragraph">Por favor responda las siguientes preguntas</p>
    ';
    
    foreach($seccion["preguntas"] as $keyPregunta => $pregunta){
        
        echo '
        <fieldset class="container" style="text-align:left;">
            <h3>'.($keyPregunta+1) .'. '. $pregunta["nombre"].'</h3>
        ';

        // If the question is obligatory
        if($pregunta["obligatoria"]){
            echo '<p style="color:red; font-size: 8px; margin-bottom: 3px;">(Obligatorio)</p>';
            $required = "required";
        }else{
            $required = "";
        }

        if($pregunta["tipo"] == "radio"){
            
            foreach($pregunta["alternativas"] as $key => $alternativa){
                
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer;" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'" value="'.$alternativa.'" class="alternativaInput noDisplay" type="radio" '.$required.'>
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input style="margin-left:19px; width:80%;" type="text" name="pregunta-especificar-'.$keySeccion.'-'.$keyPregunta.'" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "radioMultiple"){

            echo '
            <!-- Disclaimer: Se puede seleccionar más de una alternativa -->
            <p style="font-size: 12px; color: #666;">(Puede seleccionar más de una alternativa)</p>';

            foreach($pregunta["alternativas"] as $key => $alternativa){
                echo '
                    <div class="radio">
                        <input id="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" style="cursor:pointer; padding-bottom: 20px;" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'[]" value="'.$alternativa.'" class="alternativaInput noDisplay" type="checkbox" '.$required.'>
                        <label for="radio-'.$keySeccion.'-'.$keyPregunta.'-'.$key.'" class="radio-label"><i class="fas fa-square"></i> '.$alternativa.'</label>
                    </div>
                ';
                if($alternativa === "Otro (especificar)"){
                    echo '
                    <div class="otro-container">
                        <input style="margin-left:19px; width:80%;" type="text" name="pregunta-especificar-'.$keySeccion.'-'.$keyPregunta.'" placeholder="Especificar" class="otroEspecificar">
                    </div>
                    ';
                }
            }

        }elseif($pregunta["tipo"] == "text"){

            echo '<input type="text" name="pregunta-'.$keySeccion.'-'.$keyPregunta.'" placeholder="Escribir respuesta aquí" '.$required.'>';
        }else{
            echo "Tipo de pregunta no soportada";
        }
        
        echo '</fieldset>';
    }

    echo '</br></br>';

    // Botón de anterior
    if($keySeccion > 0){
        echo '
        <p class="anterior" anterior="'.($keySeccion-1).'">
            <button type="button" class="btn">
                Anterior
            </button>
        <p></br>
        ';
    }

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
        <button type="button" class="btn submitEncuesta">
            Enviar
        </button>';
    }

    echo '</br></br></br></br></section>';
}


?>
</form>

</center>