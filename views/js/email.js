$(".enviarEmail").click(function(){
    Swal.fire({
        title: 'Enviando correo...',
        text: 'Por favor, espera mientras enviamos el correo.',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });
});