<?php

include 'mdl_conexion.php';

class login{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conectar();
        $this->arraydb = array();
     }


     public function inicio_sesion($usuario,$contrasena){
         $resultado = $this->db->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'");
     
         while($filas = $resultado->fetch_assoc()){
                $this->lista[] = $filas;
         }
         return $this->lista;
     }
}

?>