<?php

//conexion crud
class Conexion{
 public static function conectar(){
 	try {
 		$cn= new PDO("mysql:host=localhost;dbname=bdgoodpartner","root","");
 		return $cn;
 	} catch (PDOException $ex) {
 		die($ex->getMessage());
 	}
 }
}

?>

<?php  
//conexion login
//configuracion de la conexion
$servidor = 'localhost';
$base_datos = 'bdgoodpartner';
$usuario = 'root';
$clave = '';

//establezco la conexion con PDO en este caso para MySQL
$conexion = new PDO("mysql:host=$servidor; dbname=$base_datos", $usuario, $clave);
	
//aplico el español	
$conexion->exec("SET CHARACTER SET utf8");
?>



<?php 
//conexion combos
function getConn(){
  $mysqli = mysqli_connect('localhost', 'root', '', "bdgoodpartner");
  if (mysqli_connect_errno($mysqli))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $mysqli->set_charset('utf8');
  return $mysqli;
}
?>



