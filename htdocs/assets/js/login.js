function login(){
    var usuario = document.getElementById('users').value;
    var pass = document.getElementById('pwd').value;

    var datos = new FormData();
    
    datos.append("usuario", usuario);
    datos.append("contrasena", pass);

   




    $.ajax({
        url:"ctrl_login",
        type: "POST",
        processData: false,
        contentType: false,
        data: datos,
        success: function(res){
            var respuesta = JSON.parse(res)
            console.log(respuesta)
            if(respuesta.status == "1"){
                Swal.fire({
                    title: 'Iniciando Sesion',
                    text: "Bienvenido " + respuesta.usuario,
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonText: 'Ingresar a la pagina'
                    }).then((result) => {
                    if (result.isConfirmed){
                        let myurl = respuesta.tipo_usuario == "1" ? 'usuarios' : 'admin' ; // operador condicional Ternaria, if o un else excepcion 
                    window.location.replace(myurl)
                    console.log(myurl)
                    console.log(respuesta)
                    }
                })
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Inicio incorrecto, porfavor ingrese bien sus datos ',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
        }
    })
}