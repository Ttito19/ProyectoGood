<?php 
require_once '../datos/conexion.php';


function getProvincias(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `provincia` WHERE iddepa = $id";
  $result = $mysqli->query($query);
  $videos = '<option value="0">Elige provincias</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $videos .= "<option value='$row[idprov]'>$row[nomprov]</option>";
  }
  return $videos;
}
echo getProvincias();
