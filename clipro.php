<?php 

require_once 'conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT  * FROM tipo where idtipo=2 or idtipo=3 ';
  $result = $mysqli->query($query);
 // $listas = '<option value="0">Elige un Cargo</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[idtipo]'>$row[nomtipo]</option>";
  }
  return $listas;
}

echo getListasRep();