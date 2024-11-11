function aceptarConsentimiento() {
    // Get url
    let url = $("#url").val();
    window.location.href = url + "acuerdo/aceptar";
}

function rechazarConsentimiento() {
    // Get url
    let url = $("#url").val();
    window.location.href = url + "acuerdo/rechazar";
}