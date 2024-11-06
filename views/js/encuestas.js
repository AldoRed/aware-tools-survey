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

$(".contestar_enc").click(function(){
    $("#main").slideUp();
    $("#encuesta").slideDown();
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