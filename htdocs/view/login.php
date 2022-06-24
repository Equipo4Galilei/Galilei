<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galilei</title>
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
    <link rel="stylesheet" href="../assets/css/estilos.css">


</head>

<body>

     <!--Barra Social -->    
   <div class="social-bar" >
        <a href="https://www.facebook.com/Galilei-110284478389509" class="icon icon-facebook" target="_blank"></a>
        <a href="https://twitter.com/Galileiutsc" class="icon icon-twitter" target="_blank"></a>
        <a href="https://www.instagram.com/galileiutsc/" class="icon icon-instagram" target="_blank"></a>
    </div>
    
    <!--Barra de navegacion -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
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
                <button onclick="open_reg_modal()" class="btn btn-light" type="button">Acceder</button>
                
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
                                <button type="button" onclick="login()" class="btn btn-outline-success">Acceder</button> 
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar </button>
                            </div>
                

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

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
        <p>Somos una empresa dedicada a la fabricacion de partes de telescopios espaciales y  a la administracion de inventarios.</p>
    </div>

    <div id="section2" class="container-fluid text-dark" style="padding:100px 20px; background-color: #D1CB9F;">
        <h1>A que nos dedicamos?</h1>
        <p>Principalmente nos dedicamos a la administracion de base de datos de nuestros productos para su venta a las agencias</p>
        <p>que ayudarian a agilizar el trabajo de distitas areas</p>
    </div>

    <div id="section3" class="container-fluid text-dark" style="padding:100px 20px; background-color: #C6BF88;">
        <h1>Que queremos?</h1>
        <p>Llegar a ser unos de los mayores contruibidores de productos telescopicos asi como expandirnos a lo satelital</p>
        <p>.</p>
    </div>


            <!-- comentarios -->
<div class="contenido">

<ul class="team">
    <li class="miembro co-fundador">
        <div class="imagen"><img src="../assets/img/luis.png"></div>
        <div class="descripcion">
            <h3>Luis Enrique</h3>
            <p>Deberíamos aplicar la misma forma a nuestras construcciones. Son la figura perfecta para ocupar espacios y seguir ampliando hacia todos los lados. Maravilloso.<br><a href="https://www.instagram.com/elg2510/" target="_blank">@LuisEnrique</a></p>
        </div>
    </li>
    <li class="miembro co-fundador">
        <div class="imagen"><img src="../assets/img/hugo.gif"></div>
        <div class="descripcion">
            <h3>Hector Hugo</h3>
            <p>Sorprendió a todo el mundo. No tenía sentido que pudiéramos construir un telescopio de seis veces más capacidad que el Hubble y manteniendo los costes<br><a href="https://twitter.com/search?q=%23VerguenzaNacional&src=trend_click&vertical=trends"
                    target="_blank">@Hugo</a></p>
        </div>
    </li>
    <li class="miembro co-fundador">
        <div class="imagen"><img src="../assets/img/dianet.jpg"></div>
        <div class="descripcion">
            <h3>Dianet Cruz</h3>
            <p> Webb tiene el potencial de sorprender a la gente, incluso a las personas que están acostumbradas a las imágenes del telescopio espacial Hubble, y sé que es difícil de imaginar<br><a href="https://twitter.com/search?q=%23VerguenzaNacional&src=trend_click&vertical=trends"
                    target="_blank">@Dianetcruz</a></p>
        </div>
    </li>
    <li class="miembro co-fundador">
        <div class="imagen"><img src="../assets/img/saul.jpg"></div>
        <div class="descripcion">
            <h3>Saúl Miguel</h3>
            <p>Los hexágonos han demostrado gran capacidad de aprovechamiento del espacio y estructuralmente más resistente en el caso del panal, usado en el James Webb.<br><a href="https://www.instagram.com/thispersonissawl/" target="_blank">@thispersonissawl</a></p>
        </div>
    </li>
</ul>
</div>
            <!-- comentarios -->


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




<script src="../assets/js/login.js"></script>

</body>
</html>