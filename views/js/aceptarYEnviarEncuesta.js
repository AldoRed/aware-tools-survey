$(".publicarEncuesta").click(function(){
    $(this).removeClass(".publicarEncuesta");
    const token = $(this).attr("token");
    const url = $("#url").val();

    Swal.fire({
        title: 'Publicando encuesta',
        html: 'Espere por favor',
        icon: 'info',
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    const source = new EventSource(url + "ajax/publicarEncuesta.ajax.php?token=" + token);

    source.addEventListener("open", function () {
        console.log("Conexión SSE abierta.");
        Swal.fire({
            title: 'Publicando encuesta',
            html: 'Espere por favor',
            icon: 'info',
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
            }
        });
    });
    
    source.addEventListener("progress", function (event) {
        const data = JSON.parse(event.data);
        const { sent, total } = data;

        Swal.fire({
            title: 'Enviando correos',
            html: `Enviando correo ${sent} de ${total}`,
            icon: 'info',
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
            }
        });
    });

    source.addEventListener("error", function (event) {
        const mensaje = event.data;
        console.error(mensaje);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: mensaje
        });
    });

    source.addEventListener("complete", function (event) {
        const mensaje = event.data;

        Swal.fire({
            title: 'Correos enviados',
            text: mensaje,
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = url + "admin";
        });

        source.close();
    });
});