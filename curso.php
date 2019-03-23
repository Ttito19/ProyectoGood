<?php 
require_once 'conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT * FROM curso';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige un curso</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[idcurso]'>$row[nomcurso]</option>";
  }
  return $listas;
}

echo getListasRep();
