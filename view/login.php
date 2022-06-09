<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventarios Facil</title>
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
            <a class="navbar-brand" href="javascript:void(0)">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    
                    </li>
                </ul>
                <button onclick="open_reg_modal()" class="btn btn-primary" type="button">Acceder</button>
                
                <div class="modal fade" id="modal_add_user">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Iniciar Sesion</h4>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="form-group">

                                    <label for="users">Usuario</label>
                                    <input class="form-control" type="text" placeholder="Ingresa el usuario" id="users">

                                    <label for="pwd">Contraseña</label>
                                    <input type="password" id="pwd" placeholder="Ingresa la contrasena" class="form-control">
                            
                                </div>
                            </div>

                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="registro">No tienes cuenta? Registrate</a>
                                <button type="button" onclick="login()" class="btn btn-primary">Acceder</button> 
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar </button>
                            </div>
                

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <h3 style="text-align: center;">Pagina Web dedicada 100% a inventario de equipos</h3>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../assets/img/inventarios.jpg" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Manejamos base de datos</h3>
            <p>Manejamos un buena redundancia de datos para almacen en nuestro servidor tus registors</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../assets/img/inventarios.jpg" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
            </div> 
        </div>
        <div class="carousel-item">
            <img src="../assets/img/inventarios.jpg" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
            </div>  
        </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        </button>
        </div>

        <div class="container-fluid mt-3">
        <h3 style="text-align: center;">Ejemplos de lo que manejamos</h3>
        <p style="text-align: center;">Somos una empresa comprometidos con tus datos personales.</p>
        </div>
    </div>

    <script>
        function open_reg_modal() {
            $('#modal_add_user').modal('toggle');
        }

    </script>




<script src="../assets/js/login.js"></script>
</body>
</html>