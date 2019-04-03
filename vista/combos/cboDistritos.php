<?php 
require_once '../../datos/conexion.php';

function getDistrito(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `distritos` WHERE idprov = $id";
  $result = $mysqli->query($query);
  $videos = '<option value="0">Elige distrito</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $videos .= "<option value='$row[iddis]'>$row[nomdis]</option>";
  }
  return $videos;
}
echo getDistrito();