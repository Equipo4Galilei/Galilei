<?php

session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


include("../model/mdl_login.php");
$obj = new Login();
$resultado = $obj -> inicio_sesion($usuario,$contrasena);

if(empty($resultado)){
    exit(json_encode([
        "status" => "2"
    ]));
}else{

    foreach($resultado as $r){
        $nombre = $r['usuario'];
        $tipo_usuario = $r['tipo_usuario'];
    }

    $_SESSION['login'] = "ok";
    $_SESSION['nombre'] = $nombre;
    

    exit(json_encode([
        "status" => "1",
        "usuario" => $nombre,
        "tipo_usuario" => $tipo_usuario
    ]));
}






?>



