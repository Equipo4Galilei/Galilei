<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventarios facil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="../assets/css/Fuentes.css">
    <link rel="stylesheet" href="../assets/css/Estilo.css">
</head>
<body>
    <!--Barra Social -->    
    <div class="social-bar" >
        <a href="https://www.facebook.com/Galilei-110284478389509" class="icon icon-facebook" target="_blank"></a>
        <a href="https://twitter.com/Galileiutsc" class="icon icon-twitter" target="_blank"></a>
        <a href="https://www.instagram.com/galileiutsc/" class="icon icon-instagram" target="_blank"></a>
    </div> 
<!--Barra de navegacion -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/Logo.PNG" alt="Logo" style="width:40px;" class="rounded-pill">
      </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="#section1">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#section2">A que nos dedicamos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#section3">Que queremos</a>
          </li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
            </li>
          </ul>
          <button onclick="open_reg_modal()"   class="btn btn-light" style="margin: 8px;">Registrate</button>
          <button onclick="paginainicio()" class="btn btn-light">Regresar</button>
      </div>
</nav>

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

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>    


    <div id="section1" class="container-fluid text-dark" style="padding:100px 20px; background-color: #E1DD8F;">
        <h1>Quienes somos?</h1>
        <p>Somos una pequena empresa que se dedica a la administracion de inventarios para otras pequenas empresas</p>
    </div>

    <div id="section2" class="container-fluid text-dark" style="padding:100px 20px; background-color: #D1CB9F;">
        <h1>A que nos dedicamos?</h1>
        <p>Principalmente nos dedicamos a la administracion de base de datos, creacion de aplicaciones para poder implementar programas</p>
        <p>que ayudarian a agilizar el trabajo de distitas areas</p>
    </div>

    <div id="section3" class="container-fluid text-dark" style="padding:100px 20px; background-color: #C6BF88;">
        <h1>Que queremos?</h1>
        <p>Principalmente darnos a conocer como una pequena empresa, queremos agilizar, optimizar distintas oportunidades en el area de trabajo</p>
        <p>de distintas empresas, agilizando asi los inventarios de dicha empresa.</p>
    </div>

    <footer class="bg-dark text-center text-white">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-white" href="#">Galilei - derechos reservados</a>
            </div>
            <!-- Copyright -->
    </footer>
    

<script>
  function open_reg_modal() {
    $('#modal_add_user').modal('toggle');
}

</script>
<script src="assets/js/create_table2.js"></script>
<script src="assets/js/paginaprincipal.js"></script>
</body>
</html>