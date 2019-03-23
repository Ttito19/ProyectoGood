<?php 
require_once 'conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT * FROM profesor';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige profesor</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[idprofesor]'>$row[nompro]</option>";
  }
  return $listas;
}

echo getListasRep();
