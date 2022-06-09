<?php
include("../model/mdl_consulta2.php");
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
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Contraseña</th>
           <th>Tipo de usuario</th>
         </tr>
       </thead>
       <tbody>';

         foreach($resultado as $r){
             echo '
             <tr>
                <td>'.$r['nombre'].'</td>
                <td>'.$r['usuario'].'</td>
                <td>'.$r['contrasena'].'</td>
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
       <th>ID Usuario</th>
         <th>Nombre</th>
         <th>Usuario</th>
         <th>Contraseña</th>
         <th>Tipo de usuario</th>
         <th>Opciones</th>
       </tr>
     </thead>
     <tbody>';

       foreach($resultado as $r){
           echo '
           <tr>
           <td>'.$r['id_user'].'</td>
           <td>'.$r['nombre'].'</td>
              <td>'.$r['usuario'].'</td>
              <td>'.$r['contrasena'].'</td>
              <td>'.$r['tipo_usuario'].'</td>
              <td><button onclick="eliminar_registro('.$r['id_user'].')" class="btn btn-danger">Eliminar</button></td>
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
             <th>ID Usuario</th>
               <th>Nombre</th>
               <th>Usuario</th>
               <th>Contraseña</th>
               <th>Tipo de usuario</th>
               <th>Opciones</th>
             </tr>
           </thead>
           <tbody>';
      
             foreach($resultado as $r){
                 echo '
                 <tr>
                 <td>'.$r['id_user'].'</td>
                 <td>'.$r['nombre'].'</td>
                    <td>'.$r['usuario'].'</td>
                    <td>'.$r['contrasena'].'</td>
                    <td>'.$r['tipo_usuario'].'</td>
                    <td><button onclick="modificar_registro('.$r['id_user'].')" class="btn btn-info">Modificar</button></td>
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
      "nombre" => "poot"
    ]));
  }else{
    exit(json_encode([
      "status" => "2",
      "nombre" => "victor poot"
    ]));
  }

}


if(isset($_POST['add_nombre'])){
  $nombre = $_POST['add_nombre'];
  $usuario = $_POST['add_usuario'];
  $contra = $_POST['add_contra'];
  $tipo_usuario = $_POST['add_tipo_usuario'];

  $resultado = $obj -> insertar_registro($nombre,$usuario,$contra,$tipo_usuario);
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
$id_user = $_POST['mod_registro'];
  $resultado =  $obj -> user_info($id_user);

  foreach($resultado as $r){
echo '<!-- The Modal -->
<div class="modal fade" id="modal_mod_user">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Agregar registro</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label for="mod_nombre">Nombre</label>
          <input class="form-control" type="text" id="mod_nombre" value="'.$r['nombre'].'">
          <label for="mod_usuario">Usuario</label>
          <input class="form-control" type="text" id="mod_usuario" value="'.$r['usuario'].'">
          <label for="mod_contrasena">Contraseña</label>
          <input class="form-control" type="text" id="mod_contrasena" value="'.$r['contrasena'].'">
          <label for="mod_tipo_usuario">Tipo de usuario</label>
          <select  class="form-select" name="" id="mod_tipo_usuario">
            <option value="0">Seleccione un nivel</option>
            <option value="1">Usuario</option>
            <option value="2">Administrador</option>
          </select>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button onclick="mod_reg('.$r['id_user'].')" type="button" class="btn btn-primary">Modificar</button> 
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar </button>
      </div>

    </div>
  </div>
</div>';
  }
}
  if(isset($_POST['mod_nombre'])){
  $nombre = $_POST['mod_nombre'];
    $usuario = $_POST['mod_usuario'];
    $contra = $_POST['mod_contra'];
    $tipo_usuario = $_POST['mod_tipo_usuario'];
    $id_user = $_POST['mod_id_user'];
  
  $resultado = $obj -> modificar_registro($nombre,$usuario,$contra,$tipo_usuario,$id_user);
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