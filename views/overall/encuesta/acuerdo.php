<?php

if(isset($rutas[1]) && $rutas[1] == "aceptar"){
    $_SESSION["consentimiento"] = true;
    echo '<script>
    // Get url
    let url = window.location.href;
    url = url.split("/acuerdo");
    window.location.href = url[0] + "/inicio";
    </script>';
}

?>

<section id="consentimiento-informado" style="font-family: Arial, sans-serif; padding: 20px; max-width: 800px; margin: 0 auto; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
  <h2 style="text-align: center;">Consentimiento Informado</h2>
  <p>
    Estimado/a participante,
  </p>
  <p>
    Usted ha sido invitado/a a participar en una encuesta como parte del proyecto <strong>“Informe I+D en Ciberseguridad 2024–2025”</strong>, 
    cuyo objetivo es identificar capacidades y necesidades en ciberseguridad. Su participación es completamente voluntaria.
  </p>
  <p>
    Esta encuesta recopilará información relacionada con su institución, equipo de trabajo y áreas de investigación en ciberseguridad. 
    Los datos serán tratados de manera confidencial y utilizados únicamente con fines académicos y de investigación. No se compartirán con terceros.
  </p>
  <p>
    Si acepta participar, podrá retirar su consentimiento en cualquier momento sin que esto implique consecuencias negativas.
  </p>
  <p>
    Al presionar el botón "Acepto", usted confirma que ha leído y comprendido los términos del presente consentimiento y que acepta participar en la encuesta.
  </p>

  <div style="text-align: center; margin-top: 20px;">
    <button style="padding: 10px 20px; margin-right: 10px; background-color: #4caf50; color: white; border: none; border-radius: 4px; cursor: pointer;" onclick="aceptarConsentimiento()">
      Acepto
    </button>
    <button style="padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 4px; cursor: pointer;" onclick="rechazarConsentimiento()">
      No Acepto
    </button>
  </div>
</section>