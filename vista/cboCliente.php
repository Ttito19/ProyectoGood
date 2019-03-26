<?php 
require_once '../datos/conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT * FROM cliente';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige los alumnos</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[idcliente]'>$row[nomcli]</option>";
  }
  return $listas;
}

echo getListasRep();
