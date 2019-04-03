<?php 
require_once '../../datos/conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT * FROM empleados';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Empleados</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[idempleado]'>$row[nombre]</option>";
  }
  return $listas;
}

echo getListasRep();
