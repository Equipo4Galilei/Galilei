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
        <a class="navbar-brand" href="javascript:void(0)"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li>
                <button onclick="paginainicio()" class="btn btn-success">Regresar</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quis iusto et modi magni! Voluptatum sapiente cum praesentium
   totam possimus distinctio quisquam est, necessitatibus laborum. Fugiat nobis nulla accusamus dignissimos!</h3>


<button onclick="open_reg_modal()" class="btn btn-success">AGREGAR REGISTRO</button>
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
          <input class="form-control" type="password" id="contrasena">
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

<script>
  function open_reg_modal() {
    $('#modal_add_user').modal('toggle');
}

</script>
<script src="assets/js/create_table2.js"></script>
<script src="assets/js/paginaprincipal.js"></script>
</body>
</html>