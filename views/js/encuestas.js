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