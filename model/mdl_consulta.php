<?php
include 'mdl_conexion.php';

class consulta{

    private $db;
    private $lista;

    public function __construct(){
        $this->db = conexion::conectar();
    }

    public function table(){
        $resultado = $this->db->query("SELECT * FROM equipos");
        while ($filas = $resultado->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function delete_reg($id){
        $resultado = $this->db->query("DELETE FROM equipos WHERE id='$id'");
        if(!$resultado){
            return "false";
        }else {
            return "true";
        }
    }

    public function insertar_registro($id_equipo,$usuario,$modelo,$marca,$tipo_usuario){
        $resultado = $this->db->query("INSERT INTO equipos 
        (
            id_equipo,
            usuario,
            modelo,
            marca,
            tipo_usuario
        ) 
        VALUES 
        (
            '$id_equipo',
            '$usuario',
            '$modelo',
            '$marca',
            '$tipo_usuario'
        )
        ");

        if(!$resultado){
            return "false";
        }else {
            return "true";
        }
    }

    public function user_info($id) {
        $resultado = $this->db->query("SELECT * FROM equipos WHERE id='$id'");
            while ($filas = $resultado->fetch_assoc()) {
                $this->lista[] = $filas;
            }
            return $this->lista;
    }
    public function modificar_registro($id_equipo,$usuario,$modelo,$marca,$tipo_usuario,$id){
        $resultado = $this->db->query("UPDATE equipos SET id_equipo ='$id_equipo', usuario='$usuario',modelo='$modelo',marca='$marca',tipo_usuario='$tipo_usuario' WHERE id='$id'");
        if(!$resultado){
            return "false";
        }else {
            return "true";
        }
    }
}


?>