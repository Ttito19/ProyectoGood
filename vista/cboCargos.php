<?php 
/*require_once 'conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT DISTINCT tipo_usuario FROM login';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige un Cargo</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[idlogin]'>$row[tipo_usuario]</option>";
  }
  return $listas;
}

echo getListasRep();
*/

require_once '../datos/conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT  * FROM tipo where idtipo=1 ';
  $result = $mysqli->query($query);
 // $listas = '<option value="0">Elige un Cargo</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[idtipo]'>$row[nomtipo]</option>";
  }
  return $listas;
}

echo getListasRep();