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
                <h2 class="subtitle">Tus resultados</h2>
                
                <p class="questions__copy">-El primero es de prueba por lo que no está considerado en las estadisticas<br>-El margen de error se encuentra entre <br><b>0 <= Margen Error <= 765</b><br>mientras más cercano al 0 menor margen de error</p>
                <h2 class="subtitle">Estadisticas:</h2>
                <p class="questions__copy">-Mejor tiempo: <b>'.($mejor_tiempo/1000).' Segundos</b><br>-Menor margen de error: <b>'.$menor_error.'</b><br>-Media tiempo de respuesta: <b>'.($promedio_tiempo/1000).' Segundos</b><br>-Media margen de error: <b>'.$promedio_error.'</b><br></p>
                
                <h2 class="subtitle">1.</h2>
                <span id="pr2" style="display:inline-block; width:200px;height:200px; background:rgb(71,253,213); margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[4].'</b><br>Tiempo de Respuesta: <b>'.($resultados[3]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">2.</h2>
                <span id="pr3" style="display:inline-block; width:200px;height:200px; background:#CF3476; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[6].'</b><br>Tiempo de Respuesta: <b>'.($resultados[5]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">3.</h2>
                <span id="pr4" style="display:inline-block; width:200px;height:200px; background:#308446; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[8].'</b><br>Tiempo de Respuesta: <b>'.($resultados[7]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">4.</h2>
                <span id="pr5" style="display:inline-block; width:200px;height:200px; background:#C51D34; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[10].'</b><br>Tiempo de Respuesta: <b>'.($resultados[9]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">5.</h2>
                <span id="pr6" style="display:inline-block; width:200px;height:200px; background:#3E5F8A; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[12].'</b><br>Tiempo de Respuesta: <b>'.($resultados[11]/1000).' Segundos</b></p>
                
                <h2 class="subtitle">6.</h2>
                <span id="pr7" style="display:inline-block; width:200px;height:200px; background:#F8F32B; margin-bottom:5px;">&nbsp;</span>
                <p class="questions__copy">Margen de Error: <b>'.$resultados[14].'</b><br>Tiempo de Respuesta: <b>'.($resultados[13]/1000).' Segundos</b></p>
                
                <p class="questions__copy"></p>
                
                <a href="https://aldored.com/proyecto"><h2 class="subtitle">Volver página principal</h2></a>
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
            <h2 class="nav_title">Aware Tools Survey</h2>
        </div>
        
        <div class="nav_menu">
            <img src="">
        </div>
    </nav>
    
    <section class="hero_container container">
        <h1 class="hero_title"><?php echo $encuestas[$key]["nombre"] ?></h1>
        <p class="hero_paragraph"><b>Encuestas 100% anónimas</b></p>
        <p class="hero_paragraph"></p>
        <a href="#" class="cta contestar_enc">Contestar encuesta</a>
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

        <!--<section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">¿Quienes somos?</h2>
                    <p class="knowledge__paragraph">Actualmente </p>
                    <a href="#" class="cta">Entra al curso</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./images/macbook.png" class="knowledge__img">
                </figure>
            </div>
        </section>-->

        
        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Algunas preguntas y respuestas que quizas te puedas haber hecho.</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Los datos donde quedan registrados?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">Los registros se almacenan en un archivo csv, el cual puedes descargar <a href="views/docs/resultadosColores.csv">Aquí</a></p>
                    </div>
                </article>
                
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué datos serán requeridos?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">Edad, enfermedades que afecten a su visión y sexo</p>
                    </div>
                </article>
                
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Existe algún requisito para contestar la encuesta?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">No hay requisitos para contestar encuesta.</p>
                    </div>
                </article>
                
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Quiénes somos?
                            <span class="questions__arrow">
                                <i class="fas fa-arrow-down questions__img" aria-hidden="true"></i>
                            </span>
                        </h3>

                        <p class="questions__show">Somos un grupo de cuatro estudiantes de la Universidad Adolfo Ibañez de Viña del Mar. <b><br> Matthias Dietert.<br> Diego Figueroa.<br> Matias Orozco.<br> Aldo Muñoz.</b></p>
                    </div>
                </article>
                
            </section>

            <section class="questions__offer" style="margin-bottom:10px;">
                <h2 class="subtitle">¿Estas listo para realizar encuesta?</h2>
                <a href="#" class="cta contestar_enc">Contestar encuesta</a>
            </section>
            
            <br><br><br>
        </section>
    </main>
    
</div>
<style>
    input{
            background: rgba(255,255,255,0.1);
    border: none;
    font-size: 16px;
    height: auto;
    margin: 0;
    outline: 0;
    padding: 15px;
    width: 100%;
    background-color: #e8eeef;
    color: #8a97a0;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    }
    
</style>
<section id="encuesta" style="display:none;">
    <div>
        
        
        <h3 class="texto_e">¿Las mujeres son mejores diferenciando colores que los hombres?</h3>
        
        
        <form role="form" method="post" name="encuesta_form">
        
        <fieldset class="container pregunta_1" style="text-align:left;">
            
            <h3>Información básica</h3>
            
            <div class="col-xs-12 col-sm-4">
                <label for="edad">Edad:</label>
                <input type="number" id="edad_e" name="edad">
            </div>
            
            <div>
                
            </div>
            <div class="col-xs-12 col-sm-3">
              <label>Sexo:</label>
              <div class="radio">
                <input id="radio-1" name="gen" value="M" type="radio" checked>
                <label for="radio-1" class="radio-label">Masculino</label>
              </div>
            
              <div class="radio">
                <input id="radio-2" name="gen" value="F" type="radio">
                <label  for="radio-2" class="radio-label">Femenino</label>
              </div>
            </div>
            
            <div class="col-xs-12 col-sm-3">
              <label>¿Sufres daltonismo o similares?:</label>
              <div class="radio">
                <input id="enf-si" name="enf" value="1" type="radio">
                <label for="enf-si" class="radio-label">SI</label>
              </div>
            
              <div class="radio">
                <input id="enf-no" name="enf" value="0" type="radio" checked>
                <label  for="enf-no" class="radio-label">NO</label>
              </div>
            </div>
            
            <p class="siguiente_1">
                <button style="margin-top:5px;" type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_2 noDisplay">
            <h3>1.</h3>
            <span id="pr2" style="display:inline-block; width:200px;height:200px; background:rgb(71,253,213); margin-bottom:5px;">&nbsp;</span>
            <span id="pr2_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e2" data-jscolor="{previewElement:'#pr2_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_3 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_3 noDisplay">
            <h3>2.</h3>
            <h3 class="cron_3">01:00</h3>
            <span id="pr3" style="display:inline-block; width:200px;height:200px; background:#CF3476; margin-bottom:5px;">&nbsp;</span>
            <span id="pr3_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e3" data-jscolor="{previewElement:'#pr3_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_4 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_4 noDisplay">
            <h3>3.</h3>
            <h3 class="cron_4">01:00</h3>
            <span id="pr4" style="display:inline-block; width:200px;height:200px; background:#308446; margin-bottom:5px;">&nbsp;</span>
            <span id="pr4_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e4" data-jscolor="{previewElement:'#pr4_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_5 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_5 noDisplay">
            <h3>4.</h3>
            <h3 class="cron_5">01:00</h3>
            <span id="pr5" style="display:inline-block; width:200px;height:200px; background:#C51D34; margin-bottom:5px;">&nbsp;</span>
            <span id="pr5_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e5" data-jscolor="{previewElement:'#pr5_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_6 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_6 noDisplay">
            <h3>5.</h3>
            <h3 class="cron_6">01:00</h3>
            <span id="pr6" style="display:inline-block; width:200px;height:200px; background:#3E5F8A; margin-bottom:5px;">&nbsp;</span>
            <span id="pr6_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e6" data-jscolor="{previewElement:'#pr6_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_7 noDisplay">
                <button type="button">
                    Siguiente
                </button>
            <p>
        </fieldset>
        
        <fieldset class=" pregunta_7 noDisplay">
            <h3>6.</h3>
            <h3 class="cron_7">01:00</h3>
            <span id="pr7" style="display:inline-block; width:200px;height:200px; background:#F8F32B; margin-bottom:5px;">&nbsp;</span>
            <span id="pr7_r" style="display:inline-block; width:200px;height:200px; margin-bottom:5px;">&nbsp;</span>
            <p>
                <button class="pick_e7" data-jscolor="{previewElement:'#pr7_r'}">
                    Pick color
                </button>
            <p>
            <p class="siguiente_8 noDisplay">
                <button type="submit">
                    Terminar
                </button>
            <p>
                
            <input id="i" name="i" type="text" hidden>
            <input id="r" name="r" type="text" hidden>
        </fieldset>
        
        </form>
        
        
    </div>
</section>

</center>

<script src="views/js/encuestas.js"></script>