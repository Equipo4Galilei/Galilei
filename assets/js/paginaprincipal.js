function  paginainicio() {

    Swal.fire({
        title: 'Regresando!',
        text: 'Va regresar a la pagina princial, desea continuar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "ctrl_cerrarsesion",
                type: "POST",
                processData: false,
                contentType: false,
                data: "ok=" + "ok",
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        window.location.replace("login")
                    }
                }
            })
        }
    })

}