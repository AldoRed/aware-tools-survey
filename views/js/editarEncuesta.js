var imagenEncuesta = null;

$("#imagenEncuesta").on("change", function() {
    
    const file = this.files[0];
    const reader = new FileReader();
    let imagenEncuestaTmp = null;
    imagenEncuesta = this.files[0];

    reader.onload = function(e) {
        imagenEncuestaTmp = e.target.result;
        $("#imagenEncuestaPreview").attr("src", imagenEncuestaTmp);
        $("#imagenEncuestaPreview").show();
    };

    reader.readAsDataURL(file);
});

$("#btnCrearSeccion").on("click", function() {
    // Agregar un nuevo td al final de la tabla tbody de secciones
    let html = "<tr>";
    html += "<td><input type='text' class='form-control' placeholder='Nombre sección' required></td>";
    html += "<td>";
    html += "<table class='table table-responsive'>";
    html += "<thead>";
    html += "<tr>";
    html += "<td>Pregunta</td>";
    html += "<td>Tipo</td>";
    html += "<td>Alternativas</td>";
    html += "<td>Obligatoria</td>";
    html += "</tr>";
    html += "</thead>";
    html += "<tbody>";
    html += "</tbody>";
    html += "</table>";
    html += '<button type="button" class="btn btn-success agregarNuevaPregunta" style="margin-right: 5px;">Nueva pregunta</button>';
    html += '<button type="button" class="btn btn-default duplicarUltimaPregunta">Duplicar última pregunta</button>';
    html += "</td>";
    html += "</tr>";

    $("#secciones").append(html);

    // Hacer click en el botón de agregar nueva pregunta
    $("#secciones tr:last-child .agregarNuevaPregunta").click();
});

$(document).on("click", ".agregarNuevaPregunta", function () {
    // Agregar un nuevo td al final de la tabla tbody dentro de la sección
    let html = "<tr>";
    html += "<td><input type='text' class='form-control nombrePregunta' placeholder='Pregunta'></td>";
    html += '<td>\
                <select class="form-control tipoPregunta">\
                    <option value="">Seleccione...</option>\
                    <option value="radio">Selección única</option>\
                    <option value="radioMultiple">Selección múltiple</option>\
                    <option value="text">Texto</option>\
                </select>\
            </td>';
    html += "<td></td>";
    html += '<td><input type="checkbox" class="form-control obligatorio" value="true"></td>';
    html += "</tr>";

    $(this).closest("tr").find("tbody").append(html);
});

$(document).on("click", ".duplicarUltimaPregunta", function() {
    const tbody = $(this).closest("tr").find("tbody");
    let tr = tbody.find("tr:last-child")

    const tipo = tr.find("td:eq(1) select").val();

    tr = tr.clone();

    tr.find("td:eq(1) select").val(tipo);

    tbody.append(tr);
});

$(document).on("change", ".tipoPregunta", function() {
    const tipo = $(this).val();
    let html = "";

    if (tipo == "radio" || tipo == "radioMultiple") {
        html += '<input type="text" class="form-control" >';
        html += '<button type="button" class="btn btn-success agregarNuevaAlternativa" style="margin-right: 5px;"><i class="fas fa-plus"></i></button>';
        html += '<button type="button" class="btn btn-primary agregarOtro" accion="agregar"><i class="fas fa-plus"></i> Agregar otro</button>';
    }

    $(this).closest("tr").find("td:eq(2)").html(html);
});

$(document).on("click", ".agregarNuevaAlternativa", function() {
    let html = '<input type="text" class="form-control">';
    $(this).before(html);
});

$(document).on("click", ".agregarOtro", function () {
    const accion = $(this).attr("accion");

    if(accion == "quitar"){
        $(this).attr("accion", "agregar");
        // remove input added before this button
        $(this).prev().remove();

        // Change class "btn-danger" to "btn-primary"
        $(this).removeClass("btn-danger");
        $(this).addClass("btn-primary");
        $(this).html("<i class='fas fa-plus'></i> Agregar otro");
        return;
    }

    $(this).attr("accion", "quitar");
    // Change class "btn-danger" to "btn-primary"
    $(this).removeClass("btn-primary");
    $(this).addClass("btn-danger");
    $(this).html("<i class='fas fa-minus'></i> Quitar otro");
    

    let html = "<input type='text' value='Otro (especificar)' class='form-control' disabled>";
    $(this).before(html);
})

$(document).on("keyup", ".nombrePregunta", function() {
    const value = $(this).val();
    
    if(value === ""){
        // Remove the whole row
        $(this).closest("tr").remove();
    }
});

$("#enviarEditarEncuesta").click(function() {
    const nombreEncuesta = $("input[name='nombreEncuesta']").val();
    const slugEncuesta = $("input[name='slugEncuesta']").val();
    const descripcionEncuesta = $("textarea[name='descripcionEncuesta']").val();
    const url = $("#url").val();
    const cronometro = $("#cronometro").val();

    if (nombreEncuesta == "" || slugEncuesta == "" || descripcionEncuesta == "") {
        alert("Todos los campos son obligatorios");
        return;
    }

    const secciones = [];
    $("#secciones tr").each(function() {
        const seccion = {
            nombre: $(this).find("td:eq(0) input").val(),
            preguntas: []
        };

        $(this).find("tbody tr").each(function() {
            const pregunta = {
                nombre: $(this).find("td:eq(0) input").val(),
                tipo: $(this).find("td:eq(1) select").val(),
                alternativas: [],
                obligatoria: $(this).find("td:eq(3) input").is(":checked")
            };

            if (pregunta.nombre == "" || pregunta.tipo == "") {
                return;
            }

            if (pregunta.tipo == "radio" || pregunta.tipo == "radioMultiple") {
                $(this).find("td:eq(2) input").each(function() {
                    const alternativa = $(this).val();
                    if (alternativa != "") {
                        pregunta.alternativas.push(alternativa);
                    }
                });
            }

            seccion.preguntas.push(pregunta);
        });

        if (seccion.nombre != "" && seccion.preguntas.length > 0) {
            secciones.push(seccion);
        }
    });

    if (secciones.length == 0) {
        alert("Debe agregar al menos una sección con preguntas");
        return;
    }

    let data = new FormData();
    data.append("metodo", "editarEncuesta");
    data.append("nombreEncuesta", nombreEncuesta);
    data.append("slugEncuesta", slugEncuesta);
    data.append("descripcionEncuesta", descripcionEncuesta);
    data.append("imagenEncuesta", imagenEncuesta);
    data.append("cronometro", cronometro);
    data.append("secciones", JSON.stringify(secciones));


    $.ajax({
        url: url + "ajax/crearEncuesta.ajax.php",
        type: "POST",
        data: data,
        contentType: false,
        processData: false,
        beforeSend: function() {
            $("#enviarCrearEncuesta").hide();
            Swal.fire({
                title: 'Subiendo encuesta...',
                text: 'Por favor, espera mientras subimos la encuesta.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        },
        success: function(response) {
            $("#enviarEditarEncuesta").show();
            if (response == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Encuesta editada',
                    text: 'La encuesta se ha editado correctamente. Deberá ser aprobada por un administrador.',
                    showConfirmButton: false,
                    timer: 5000
                });

                setTimeout(function() {
                    window.location.href = url + "admin";
                }, 2000);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ha ocurrido un error al crear la encuesta.'
                });
            }
        }
    });

});