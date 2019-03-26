<?php 
require_once '../conexion.php';

function getRegion(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `departamento`';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige una Region</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[iddepa]'>$row[nomdepa]</option>";
  }
  return $listas;
}
echo getRegion();