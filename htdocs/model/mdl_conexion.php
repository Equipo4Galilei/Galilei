<?php
class conexion{
    public static function conectar(){
        $link = mysqli_connect("localhost","root","root","administracion");
        $link -> set_charset("utf-8");
        return $link;
    }
}

?>