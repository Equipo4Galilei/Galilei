<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>

    <!--Barra de navegacion -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)"><br><br></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" >Usuario: <?php echo $_SESSION['nombre']; ?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="admin">Manejo inventario computo</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="usuarios_adm">Manejo usuarios</a>
                    </li>
                </ul>
                <button onclick="cerrar()" class="btn btn-success">Cerrar sesion</button>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid mt-3">
        <h2 style="text-align: center;">Administracion de usuarios y/o Equipos de computo</h2>
        <div id="tbl_datos"></div>
        <div id="modal_modificar"></div>
        <center>
        <button onclick="create_table()" class="btn btn-primary">MOSTRAR TABLA</button>
        <button onclick="eliminar_reg()" class="btn btn-danger">ELIMINAR REGISTRO</button>
        <button onclick="open_reg_modal()" class="btn btn-success">AGREGAR REGISTRO</button>
        <button onclick="table_mod()" class="btn btn-info">MODIFICAR REGISTRO</button>
        </center> 

        <!-- The Modal -->
        <div class="modal fade" id="modal_add_user">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Nuevos Registros</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input class="form-control" type="text" id="nombre">
                            <label for="usuario">Usuario</label>
                            <input class="form-control" type="text" id="usuario">
                            <label for="contrasena">Contraseña</label>
                            <input class="form-control" type="text" id="contrasena">
                            <label for="tipo_usuario">Tipo de usuario</label>
                            <select  class="form-select" name="" id="tipo_usuario">
                                <option value="0">Seleccione un nivel</option>
                                <option value="1">Usuario</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button onclick="agregar_reg()" type="button" class="btn btn-primary">Agregar</button> 
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar </button>
                    </div>

                </div>
            </div>
        </div>

        
    </div>
            
    <script>
        function open_reg_modal() {
            $('#modal_add_user').modal('toggle');
        }

    </script>

<script src="../assets/js/cerrar_sesion.js"></script>
<script src="../assets/js/create_table2.js"></script>
</body>
</html>