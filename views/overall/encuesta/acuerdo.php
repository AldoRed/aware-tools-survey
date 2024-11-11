<?php

if(isset($rutas[1]) && $rutas[1] == "aceptar"){
    $_SESSION["consentimiento"] = true;
    echo '<script>

    Swal.fire({
      title: "¡Gracias!",
      text: "Su consentimiento ha sido registrado.",
      icon: "success",
      timer: 2000,
      showConfirmButton: false
    }).then(function(){
      // Get the back url
      let url = document.referrer
      if(url.includes("acuerdo")){
        window.history.go(-2);
      } 
      window.history.go(-1);
    });
    </script>';
}

if(isset($rutas[1]) && $rutas[1] == "rechazar"){
    $_SESSION["consentimiento"] = false;
    echo '<script>

    Swal.fire({
      title: "¡Gracias!",
      text: "Su consentimiento ha sido registrado.",
      icon: "success",
      timer: 2000,
      showConfirmButton: false
    }).then(function(){
      // Get url
      let url = $("#url").val();
      window.location.href = url + "inicio";
    });
    </script>';
}

?>

<section id="consentimiento-informado" style="font-family: Arial, sans-serif; padding: 20px; max-width: 800px; margin: 0 auto; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; margin-top:15px;">
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
  <div style="border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; margin-bottom: 20px; padding: 15px;">
    <h3 style="color: #2c3e50;">PROCEDIMIENTO</h3>
    <p>
      La investigación propuesta consiste en realizar un estudio a partir de información agregada obtenida del llenado de encuestas de múltiples instituciones
      que tienen necesidades de ciberseguridad de manera de visibilizar áreas prioritarias de investigación en ciberseguridad en el País. Su tarea consiste en
      responder lo más fielmente que pueda a las preguntas formuladas.
    </p>
  </div>

  <div style="border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; margin-bottom: 20px; padding: 15px;">
    <h3 style="color: #2c3e50;">RIESGOS ASOCIADOS</h3>
    <p>
      Su participación en este estudio implica un riesgo mínimo. Si bien usted al responder revela cierta información privada, la información recopilada
      mediante los cuestionarios será tratada de manera confidencial, resguardando la privacidad y confidencialidad de los datos de manera desagregada
      así como de los participantes.
    </p>
  </div>

  <div style="border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; margin-bottom: 20px; padding: 15px;">
    <h3 style="color: #2c3e50;">BENEFICIOS</h3>
    <p>
      Los resultados de esta investigación serán utilizados para mejorar la comprensión de las necesidades y prioridades en ciberseguridad en Chile.
      Como resultado de participar en este estudio, se espera generar un informe con información agregada respecto de los resultados de la investigación.
    </p>
  </div>

  <div style="border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; margin-bottom: 20px; padding: 15px;">
    <h3 style="color: #2c3e50;">CONFIDENCIALIDAD</h3>
    <p>
      Sólo el equipo de investigación y mandante tendrá acceso a los nombres de los participantes. Los datos serán anonimizados y tratados de manera
      confidencial.
    </p>
  </div>

  <div style="border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; padding: 15px;">
    <h3 style="color: #2c3e50;">VOLUNTARIEDAD</h3>
    <p>
      Su participación en este estudio es voluntaria. Usted tiene la libertad de retirarse de él cuando lo desee. Su retiro no significa que no pueda participar
      en otro de nuestros estudios en el futuro, si usted así lo decide. La asesora puede detener el estudio si lo considera necesario, así como la participación de
      usted si lo requiere por cualquier razón.
    </p>
  </div>

  </br>
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