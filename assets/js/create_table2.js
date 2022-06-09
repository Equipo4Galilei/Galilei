function create_table() {
    $.ajax({
        type: "POST",
        url: "ctrl_tabla2",
        data: { crear_tabla: "ok" }
    }).done(function(datos) {
        $("#tbl_datos").html(datos);
        $('#example').DataTable();
    });
}


function eliminar_reg() {
    $.ajax({
        type: "POST",
        url: "ctrl_tabla2",
        data: { crear_tabla_del: "ok" }
    }).done(function(data) {
        $("#tbl_datos").html(data);
        $('#example').DataTable();
    });
}

function table_mod() {
    $.ajax({
        type: "POST",
        url: "ctrl_tabla2",
        data: { crear_tabla_mod: "ok" }
    }).done(function(data) {
        $("#tbl_datos").html(data);
        $('#example').DataTable();
    });
}

function modificar_registro(id) {
    $.ajax({
        type: "POST",
        url: "ctrl_tabla2",
        data: { mod_registro: id }
    }).done(function(data) {
        $("#modal_modificar").html(data);
        $('#modal_mod_user').modal('toggle');
    });
}

function eliminar_registro(id) {
    Swal.fire({
        title: 'Estas seguro de eliminar el registro?',
        text: "Estas a punto de eliminar el registro " + id,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#5AF32C',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "ctrl_tabla2",
                data: { delete_reg: id }
            }).done(function(data) {
                console.log(data)
                var resultado = JSON.parse(data);

                if (resultado.status == 1) {
                    Swal.fire(
                        'Exito!',
                        'registro eliminado exitosamente! ' + resultado.nombre,
                        'success'
                    )
                    create_table()
                } else {
                    Swal.fire(
                        'Error!',
                        'error al eliminar registro!' + resultado.nombre,
                        'error'
                    )
                }
            });
        }
    });
}


function agregar_reg() {
    if ($('#nombre').val() == "") {
        Command: toastr["error"]("favor de llenar el campo Nombre", "ERROR")
    }
    else if ($('#usuario').val() == "") {
        Command: toastr["error"]("favor de llenar el campo Usuario", "ERROR")
    }
    else if ($('#contrasena').val() == "") {
        Command: toastr["error"]("favor de llenar el campo Contraseña", "ERROR")
    }
    else if ($('#tipo_usuario').val() == 0) {
        Command: toastr["error"]("favor de seleccionar un tipo de usuario", "ERROR")
    }
    else {
        //SE EJECUTA AJAX
        var datos = new FormData();
        datos.append("add_nombre", $('#nombre').val());
        datos.append("add_usuario", $('#usuario').val());
        datos.append("add_contra", $('#contrasena').val());
        datos.append("add_tipo_usuario", $('#tipo_usuario').val());
        $.ajax({
            type: "POST",
            url: "ctrl_tabla2",
            processData: false,
            contentType: false,
            data: datos
        }).done(function(data) {
            console.log(data)
            var respuesta = JSON.parse(data);
            if (respuesta.status == 1) {
                Command: toastr["success"]("Registro agregado exitosamente", "Exito")
                create_table()
            }
            else {
                Command: toastr["error"]("Error en el registro", "ERROR")
            }
        });

    }
}

function mod_reg(id) {
    if ($('#mod_nombre').val() == "") {
        Command: toastr["error"]("favor de llenar el campo Nombre", "ERROR")
    }
    else if ($('#mod_usuario').val() == "") {
        Command: toastr["error"]("favor de llenar el campo Usuario", "ERROR")
    }
    else if ($('#mod_contrasena').val() == "") {
        Command: toastr["error"]("favor de llenar el campo Contraseña", "ERROR")
    }
    else if ($('#mod_tipo_usuario').val() == 0) {
        Command: toastr["error"]("favor de seleccionar un tipo de usuario", "ERROR")
    }
    else {
        //SE EJECUTA AJAX
        var datos = new FormData();
        datos.append("mod_nombre", $('#mod_nombre').val());
        datos.append("mod_usuario", $('#mod_usuario').val());
        datos.append("mod_contra", $('#mod_contrasena').val());
        datos.append("mod_tipo_usuario", $('#mod_tipo_usuario').val());
        datos.append("mod_id_user", id);
        $.ajax({
            type: "POST",
            url: "ctrl_tabla2",
            processData: false,
            contentType: false,
            data: datos
        }).done(function(data) {
            console.log(data)
            var respuesta = JSON.parse(data);
            if (respuesta.status == 1) {
                Command: toastr["success"]("Registro modificado exitosamente", "Exito")
                create_table()
            }
            else {
                Command: toastr["error"]("Error en el registro", "ERROR")
            }
        });
    }
}

//configuración toastr
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}