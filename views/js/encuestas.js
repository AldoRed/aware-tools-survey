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

function activarCronometro(){
    $("#cronometro-container").show();
    let seconds = 0;

    function formatTime(totalSeconds) {
        let minutes = Math.floor(totalSeconds / 60);
        let secs = totalSeconds % 60;
        
        return (minutes < 10 ? "0" + minutes : minutes) + ":" + (secs < 10 ? "0" + secs : secs);
    }

    setInterval(function () {
        seconds++;
        $("#cronometro").text(formatTime(seconds));
    }, 1000);
}

// Encuesta
$(".contestar_enc").click(function(){
    $("#main").slideUp();
    $("#encuesta").slideDown();
    $(".seccion_0").slideDown();
    // Scroll to top
    window.scrollTo(0, 0);

    // Activar cronometro
    const cronometro = $("input[name='cronometro']").val();
    if(cronometro == 1){
        activarCronometro();
    }
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

// function to go back to the previous section
$(".anterior").click(function(){
    const anterior = parseInt($(this).attr("anterior"));
    // Scroll to top
    window.scrollTo(0, 0);
    
    // Put background green
    $(".seccion_"+(anterior+1)).hide();
    $(".seccion_"+(anterior)).slideDown();
});

// function submit Form
$(".submitEncuesta").click(function(){

    // Validate the last section
    let inputs = $(this).parent().find("input");

    if(!checkInput(inputs)){
        Swal.fire({
            icon: "error",
            title: "Por favor, revisa tus respuestas",
            showConfirmButton: false,
            timer: 1200
        });
        return;
    }
    
    inputs = $(".seccion_0").parent().find("input");

    removeRequired(inputs);

    // Get cronometro time in seconds if it's active and add it to the form
    let cronometro = '';
    if($("#cronometro-container").is(":visible")){
        cronometro = $("#cronometro").text();
        // pasar a segundos
        let time = cronometro.split(":");
        cronometro = parseInt(time[0])*60 + parseInt(time[1]);

        $("input[name='cronometro']").val(cronometro);
    }

    // Submit the form
    $(this).attr("type", "submit");
    $(this).click();
});

// function to remove the required attr from the inputs
function removeRequired(inputs){
    for(let i = 0; i < inputs.length; i++){
        let input = inputs[i];
        $(input).removeAttr("required");
    }
}

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
                } else if((input.attr("type") == "text" || input.is("textarea")) && input.val() != ""){
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