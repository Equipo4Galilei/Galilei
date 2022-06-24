<?php
include 'mdl_conexion.php';

class consulta{

    private $db;
    private $lista;

    public function __construct(){
        $this->db = conexion::conectar();
    }

    public function table(){
        $resultado = $this->db->query("SELECT * FROM usuarios");
        while ($filas = $resultado->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function delete_reg($id_reg){
        $resultado = $this->db->query("DELETE FROM usuarios WHERE id_user='$id_reg'");
        if(!$resultado){
            return "false";
        }else {
            return "true";
        }
    }

    public function insertar_registro($nombre,$usuario,$contra,$tipo_usuario){
        $resultado = $this->db->query("INSERT INTO usuarios 
        (
            nombre,
            usuario,
            contrasena,
            tipo_usuario
        ) 
        VALUES 
        (
            '$nombre',
            '$usuario',
            '$contra',
            '$tipo_usuario'
        )
        ");

        if(!$resultado){
            return "false";
        }else {
            return "true";
        }
    }

    public function user_info($id_user) {
        $resultado = $this->db->query("SELECT * FROM usuarios WHERE id_user='$id_user'");
            while ($filas = $resultado->fetch_assoc()) {
                $this->lista[] = $filas;
            }
            return $this->lista;
    }
    public function modificar_registro($nombre,$usuario,$contra,$tipo_usuario,$id_user){
        $resultado = $this->db->query("UPDATE usuarios SET nombre ='$nombre', usuario='$usuario',contrasena='$contra',tipo_usuario='$tipo_usuario' WHERE id_user='$id_user'");
        if(!$resultado){
            return "false";
        }else {
            return "true";
        }
    }
}


?>