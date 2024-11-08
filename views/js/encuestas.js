// Preguntas frecuentes
(function(){
    const titleQuestions = [...document.querySelectorAll('.questions__title')];
    console.log(titleQuestions)

    titleQuestions.forEach(question =>{
        question.addEventListener('click', ()=>{
            let height = 0;
            let answer = question.nextElementSibling;
            let addPadding = question.parentElement.parentElement;

            addPadding.classList.toggle('questions__padding--add');
            question.children[0].classList.toggle('questions__arrow--rotate');

            if(answer.clientHeight === 0){
                height = answer.scrollHeight;
            }

            answer.style.height = `${height}px`;
        });
    });
})();


function margenError(a,b){
    return Math.abs((a[0]-parseInt(b[0]))) + Math.abs((a[1]-parseInt(b[1]))) + Math.abs((a[2]-parseInt(b[2])));
}

// Encuesta
$(".contestar_enc").click(function(){
    $("#main").slideUp();
    $("#encuesta").slideDown();
    $(".seccion_0").slideDown();
    // Scroll to top
    window.scrollTo(0, 0);
});

$(".siguiente").click(function(){
    const siguiente = $(this).attr("siguiente");
    // Scroll to top
    window.scrollTo(0, 0);

    let inputs = $(".seccion_"+(siguiente-1)).find("input");

    if(checkInput(inputs)){
        $(".seccion_"+(siguiente-1)).hide();
        $(".seccion_"+siguiente).slideDown();
    }else{
        Swal.fire({
            icon: "error",
            title: "Por favor, revisa tus respuestas",
            showConfirmButton: false,
            timer: 1200
          });
    }
});

// function to check if the input was answered if it's required
function checkInput(inputs){

    let inputsGroup = new Map();
    for(let i = 0; i < inputs.length; i++){
        let input = inputs[i];
        let name = input.getAttribute("name");
        if (!inputsGroup.has(name)) {
            inputsGroup.set(name, []);
        }
        inputsGroup.get(name).push($(input));
    }

    // Check if the input is required and if it's empty
    let otraEspecificaSelected = false;
    for (let [key, value] of inputsGroup) {
        let required = false;
        let isValid = false;

        for(let i = 0; i < value.length; i++){
            let input = value[i];

            // console.log("Se está checkeando input", input);
            // console.log("required", input.attr("required"));
            // console.log("type", input.attr("type"));
            // console.log("value", input.val());
            // console.log("checked", input.prop("checked"));
            
            if(otraEspecificaSelected){
                if(input.attr("type") == "text" && input.val() == ""){
                    input.addClass("input-error");
                    return false;
                }
                otraEspecificaSelected = false;
            }else if(input.attr("required")){
                required = true;

                if(input.attr("type") == "radio" || input.attr("type") == "checkbox"){
                    if(input.prop("checked")){
                        isValid = true;
                        if(input.val() === "Otro (especificar)"){
                            otraEspecificaSelected = true;
                        }
                    }
                } else if(input.attr("type") == "text" && input.val() != ""){
                    isValid = true;
                }
            }else if(input.val() == "Otro (especificar)" && input.prop("checked")){
                otraEspecificaSelected = true;
            }
        }

        if(required && !isValid){
            return false;
        }
    }

return true;
}

$(".alternativaInput").click(function(){
    if($(this).attr("type") == "radio"){
        // Uncheck the other inputs
        $(this).parent().siblings().removeClass("seleccionado");
        $(this).parent().siblings().find("i").removeClass("fa-check-square").addClass("fa-square");
    }

    // Find <i> element
    const iElement = $(this).parent().find("i");
    console.log(iElement);
    

    // Check if the input is checked
    if($(this).prop("checked")){
        // Add "seleccionado" class to the parent element
        $(this).parent().addClass("seleccionado");
        iElement.removeClass("fa-square").addClass("fa-check-square");
    }else{
        // Remove "seleccionado" class to the parent element
        $(this).parent().removeClass("seleccionado");
        iElement.removeClass("fa-check-square").addClass("fa-square");
    }
});

$(".siguiente_1").click(function(){
    if($("#edad_e").val() != ""){
        $(".texto_e").html("Iguala los colores");
        $(".pregunta_1").slideUp();
        $(".pregunta_2").slideDown();
        $("#r").val($("#edad_e").val() + "," + $('input[name=gen]:checked', '.pregunta_1').val() + "," + $('input[name=enf]:checked', '.pregunta_1').val());
    }
    const d = new Date();
    $("#i").val(d.getTime());
})

$(".pick_e2").click(function(){
    $(".siguiente_3").show();
})



$(".siguiente_3").click(function(){
    
    
    //Cronometro
    cronometro = setInterval(function () {
        
        let valor = $(".cron_3").html();
        
        if(valor == "01:00"){
            $(".cron_3").html("00:59")
        }else if(valor == "00:00"){
            $(".siguiente_4").click();
        }else{
            
            valor = valor.split(":")[1]
            
            let res = (valor-1);
            if(res < 10){
                res = '0' + (valor-1);
            }
            $(".cron_3").html("00:"+res);
        }
       
        
    }, 1000);
    
    const d = new Date();
    let f = d.getTime() - $("#i").val();
    
    let color = $("#pr2_r").css("background");
    let rgbR = color.substr(30, 25).split(")", 2)[0].split(",");
    
    errorR = margenError([71,253,213],rgbR);
    
    $(".pregunta_2").slideUp();
    $(".pregunta_3").slideDown();
    
    $("#r").val($("#r").val() + "," + f + "," + errorR);
    
    $("#i").val(d.getTime());
})

$(".pick_e3").click(function(){
    $(".siguiente_4").show();
})

$(".siguiente_4").click(function(){
    clearInterval(cronometro);
    //Cronometro
    cronometro = setInterval(function () {
        
        let valor = $(".cron_4").html();
        
        if(valor == "01:00"){
            $(".cron_4").html("00:59")
        }else if(valor == "00:00"){
            $(".siguiente_5").click();
        }else{
            
            valor = valor.split(":")[1]
            
            let res = (valor-1);
            if(res < 10){
                res = '0' + (valor-1);
            }
            $(".cron_4").html("00:"+res);
        }
       
        
    }, 1000);
    
    const d = new Date();
    let f = d.getTime() - $("#i").val();
    
    let color = $("#pr3_r").css("background");
    let rgbR = color.substr(30, 25).split(")", 2)[0].split(",");
    
    errorR = margenError([215,45,109],rgbR);
    
    $(".pregunta_3").slideUp();
    $(".pregunta_4").slideDown();
    
    $("#r").val($("#r").val() + "," + f + "," + errorR);

    $("#i").val(d.getTime());
})

$(".pick_e4").click(function(){
    $(".siguiente_5").show();
})

$(".siguiente_5").click(function(){
    
    clearInterval(cronometro);
    //Cronometro
    cronometro = setInterval(function () {
        
        let valor = $(".cron_5").html();
        
        if(valor == "01:00"){
            $(".cron_5").html("00:59")
        }else if(valor == "00:00"){
            $(".siguiente_6").click();
        }else{
            
            valor = valor.split(":")[1]
            
            let res = (valor-1);
            if(res < 10){
                res = '0' + (valor-1);
            }
            $(".cron_5").html("00:"+res);
        }
       
        
    }, 1000);
    
    const d = new Date();
    let f = d.getTime() - $("#i").val();
    
    let color = $("#pr4_r").css("background");
    let rgbR = color.substr(30, 25).split(")", 2)[0].split(",");
    
    errorR = margenError([48,132,70],rgbR);
    
    $(".pregunta_4").slideUp();
    $(".pregunta_5").slideDown();
    
    $("#r").val($("#r").val() + "," + f + "," + errorR);
    
    $("#i").val(d.getTime());
})

$(".pick_e5").click(function(){
    $(".siguiente_6").show();
})

$(".siguiente_6").click(function(){
    
    clearInterval(cronometro);
    //Cronometro
    cronometro = setInterval(function () {
        
        let valor = $(".cron_6").html();
        
        if(valor == "01:00"){
            $(".cron_6").html("00:59")
        }else if(valor == "00:00"){
            $(".siguiente_7").click();
        }else{
            
            valor = valor.split(":")[1]
            
            let res = (valor-1);
            if(res < 10){
                res = '0' + (valor-1);
            }
            $(".cron_6").html("00:"+res);
        }
       
        
    }, 1000);
    
    const d = new Date();
    let f = d.getTime() - $("#i").val();
    
    let color = $("#pr5_r").css("background");
    let rgbR = color.substr(30, 25).split(")", 2)[0].split(",");
    
    errorR = margenError([197,29,52],rgbR);
    
    $(".pregunta_5").slideUp();
    $(".pregunta_6").slideDown();
    
    $("#r").val($("#r").val() + "," + f + "," + errorR);
    
    $("#i").val(d.getTime());
})

$(".pick_e6").click(function(){
    $(".siguiente_7").show();
})

$(".siguiente_7").click(function(){
    
    clearInterval(cronometro);
    //Cronometro
    cronometro = setInterval(function () {
        
        let valor = $(".cron_7").html();
        
        if(valor == "01:00"){
            $(".cron_7").html("00:59")
        }else if(valor == "00:00"){
            $(".siguiente_8").click();
        }else{
            
            valor = valor.split(":")[1]
            
            let res = (valor-1);
            if(res < 10){
                res = '0' + (valor-1);
            }
            $(".cron_7").html("00:"+res);
        }
       
        
    }, 1000);
    
    const d = new Date();
    let f = d.getTime() - $("#i").val();
    
    let color = $("#pr6_r").css("background");
    let rgbR = color.substr(30, 25).split(")", 2)[0].split(",");
    
    errorR = margenError([62,95,138],rgbR);
    
    $(".pregunta_6").slideUp();
    $(".pregunta_7").slideDown();
    
    $("#r").val($("#r").val() + "," + f + "," + errorR);
    
    $("#i").val(d.getTime());
})

$(".pick_e7").click(function(){
    $(".siguiente_8").show();
})

$(".siguiente_8").click(function(){
    
    clearInterval(cronometro);
    
    $(".siguiente_8").hide();
    
    const d = new Date();
    let f = d.getTime() - $("#i").val();
    
    let color = $("#pr7_r").css("background");
    let rgbR = color.substr(30, 25).split(")", 2)[0].split(",");
    
    errorR = margenError([248,243,53],rgbR);
    
    $("#r").val($("#r").val() + "," + f + "," + errorR);
    var wait=setTimeout("document.encuesta_form.submit();",100);
})