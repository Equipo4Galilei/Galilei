<?php
include("../model/mdl_consulta.php");
$obj = new consulta();


if(isset($_POST['crear_tabla'])){
  
    $resultado =  $obj -> table();


    if(empty($resultado)){
        echo "error en la consulta";
    }else {
       echo '
       <table id="example" class="table">
       <thead class="table-dark">
         <tr>
           <th>Id del equipo</th>
           <th>Usuario</th>
           <th>Modelo</th>
           <th>Marca</th>
           <th>Tipo de usuario</th>
         </tr>
       </thead>
       <tbody>';

         foreach($resultado as $r){
             echo '
             <tr>
                <td>'.$r['id_equipo'].'</td>
                <td>'.$r['usuario'].'</td>
                <td>'.$r['modelo'].'</td>
                <td>'.$r['marca'].'</td>
                <td>'.$r['tipo_usuario'].'</td>
            </tr>
             ';
         }

       echo '
       </tbody>
     </table>
       ';
    }
}

if(isset($_POST['crear_tabla_del'])){
  $resultado =  $obj -> table();
  if(empty($resultado)){
      echo "error en la consulta";
  }else {
     echo '
     <table id="example" class="table">
     <thead class="table-dark">
       <tr>
        <th>ID</th>
        <th>Id del equipo</th>
        <th>Usuario</th>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Tipo de usuario</th>
        <th>Opciones</th>
       </tr>
     </thead>
     <tbody>';

       foreach($resultado as $r){
           echo '
           <tr>
           <td>'.$r['id'].'</td>
           <td>'.$r['id_equipo'].'</td>
              <td>'.$r['usuario'].'</td>
              <td>'.$r['modelo'].'</td>
              <td>'.$r['marca'].'</td>
              <td>'.$r['tipo_usuario'].'</td>
              <td><button onclick="eliminar_registro('.$r['id'].')" class="btn btn-danger">Eliminar</button></td>
          </tr>
           ';
       }
      }
    }
       if(isset($_POST['crear_tabla_mod'])){
        $resultado =  $obj -> table();
        if(empty($resultado)){
            echo "error en la consulta";
        }else {
           echo '
           <table id="example" class="table">
           <thead class="table-dark">
             <tr>
              <th>ID</th>
              <th>Id del equipo</th>
              <th>Usuario</th>
              <th>Modelo</th>
              <th>Marca</th>
              <th>Tipo de usuario</th>
              <th>Opciones</th>
             </tr>
           </thead>
           <tbody>';
      
             foreach($resultado as $r){
                 echo '
                 <tr>
                 <td>'.$r['id'].'</td>
                 <td>'.$r['id_equipo'].'</td>
                    <td>'.$r['usuario'].'</td>
                    <td>'.$r['modelo'].'</td>
                    <td>'.$r['marca'].'</td>
                    <td>'.$r['tipo_usuario'].'</td>
                    <td><button onclick="modificar_registro('.$r['id'].')" class="btn btn-info">Modificar</button></td>
                </tr>
                 ';
             }
     echo '
     </tbody>
   </table>
     ';
  }
}


if(isset($_POST['delete_reg'])){
  $id_reg = $_POST['delete_reg'];
  $resultado =  $obj -> delete_reg($id_reg);
  if($resultado == "true"){
    exit(json_encode([
      "status" => "1",
    ]));
  }else{
    exit(json_encode([
      "status" => "2",
    ]));
  }

}


if(isset($_POST['add_equipo'])){
  $idEquipo = $_POST['add_equipo'];
  $usuario = $_POST['add_usuario'];
  $modEquipo = $_POST['add_modEquipo'];
  $marEquipo = $_POST['add_marEquipo'];
  $tipo_usuario = $_POST['add_tipo_usuario'];

  $resultado = $obj -> insertar_registro($idEquipo,$usuario,$modEquipo,$marEquipo,$tipo_usuario);
if($resultado ==  "true"){
  exit(json_encode([
    "status" => "1"
  ]));
}else{
  exit(json_encode([
    "status" => "2"
  ]));
}
  
}


if(isset($_POST['mod_registro'])){
$id = $_POST['mod_registro'];
  $resultado =  $obj -> user_info($id);

  foreach($resultado as $r){
echo '<!-- The Modal -->
<div class="modal fade" id="modal_mod_user">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Nuevos Registros</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label for="mod_idEquipo">Id del equipo: </label>
          <input class="form-control" type="text" id="mod_idEquipo" value="'.$r['id_equipo'].'">
          <label for="mod_usuario">Usuario</label>
          <input class="form-control" type="text" id="mod_usuario" value="'.$r['usuario'].'">
          <label for="mod_modEquipo">Modelo del equipo: </label>
          <input class="form-control" type="text" id="mod_modEquipo" value="'.$r['modelo'].'">
          <label for="mod_marEquipo">Marca del equipo:</label>
          <input class="form-control" type="text" id="mod_marEquipo" value="'.$r['marca'].'">
          <label for="mod_tipo_usuario">Tipo de usuario</label>
          <select  class="form-select" name="" id="mod_tipo_usuario">
            <option value="0">Seleccione un nivel</option>
            <option value="1">Operativo</option>
            <option value="2">Administrativo</option>
          </select>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button onclick="mod_reg('.$r['id'].')" type="button" class="btn btn-primary">Modificar</button> 
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar </button>
      </div>

    </div>
  </div>
</div>';
  }
}
  if(isset($_POST['mod_idEquipo'])){
    $id_equipo = $_POST['mod_idEquipo'];
    $usuario = $_POST['mod_usuario'];
    $modelo = $_POST['mod_modEquipo'];
    $marca = $_POST['mod_marEquipo'];
    $tipo_usuario = $_POST['mod_tipo_usuario'];
    $id = $_POST['mod_id'];
  
  $resultado = $obj -> modificar_registro($id_equipo,$usuario,$modelo,$marca,$tipo_usuario,$id);
  if($resultado ==  "true"){
    exit(json_encode([
      "status" => "1"
    ]));
  }else{
    exit(json_encode([
      "status" => "2"
    ]));
  }
    
  }
?>