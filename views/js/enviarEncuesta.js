$(document).ready(function () {
    $('#fileInput').on('change', function (e) {
        const file = e.target.files[0];
        if (!file) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se ha seleccionado ningún archivo',
                showConfirmButton: false,
                timer: 1500
            });
            return;
        }

        const reader = new FileReader();
        reader.onload = function (event) {
            const data = new Uint8Array(event.target.result);
            const workbook = XLSX.read(data, { type: 'array' });

            // First sheet
            const sheetName = workbook.SheetNames[0];
            const worksheet = workbook.Sheets[sheetName];

            // Convert to JSON
            const jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1 });

            // Clear the list
            $('#emailList').empty();

            // Add emails to the list
            jsonData.forEach((row, index) => {
                if (row[0]) { // Check if the cell is not empty
                    $('#emailList').append(
                        `<li class="list-group-item">${row[0]}</li>`
                    );
                }
            });
        };

        reader.readAsArrayBuffer(file);
    });
});

$(".enviarEmails").click(function() {
    const url = $("#url").val();
    const emails = [];
    $('#emailList li').each(function() {
        emails.push($(this).text());
    });

    if (emails.length === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se han cargado lista correos electrónicos',
            showConfirmButton: false,
            timer: 1500
        });
        return;
    }
    
    const mensaje = $("textarea[name='mensaje']").val();

    if (!mensaje) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se ha ingresado un mensaje',
            showConfirmButton: false,
            timer: 1500
        });
        return;
    }
    // encuestas[] checked
    const encuestas = [];
    $("input[name='encuestas[]']:checked").each(function() {
        encuestas.push($(this).val());
    });
    
    if (encuestas.length === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se han seleccionado encuestas',
            showConfirmButton: false,
            timer: 1500
        });
        return;
    }

    const data = new FormData();
    data.append("metodo", "solicitudEnvio");
    data.append("emails", JSON.stringify(emails));
    data.append("mensaje", mensaje);
    data.append("encuestas", JSON.stringify(encuestas));

    $.ajax({
        url: url + "ajax/enviarEncuesta.ajax.php",
        type: "POST",
        data: data,
        contentType: false,
        processData: false,
        beforeSend: function() {
            $(".enviarEmails").hide();
            Swal.fire({
                title: 'Enviando correos a administradores de cada encuesta seleccionada...',
                text: 'Por favor, espera mientras enviamos los correos electrónicos.',
                icon: 'info',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        },
        success: function(response) {
            $(".enviarEmails").show();
            if (response == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Correos enviados correctamente',
                    text: 'La solicitud ha sido enviada a los administradores de las encuestas seleccionadas',
                    showConfirmButton: false,
                    timer: 10000
                });

                setTimeout(function() {
                    window.location.href = url + "admin";
                }, 2000);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ha ocurrido un error al enviar los correos electrónicos',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    });
})