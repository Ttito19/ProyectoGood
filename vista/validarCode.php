
<?php
/*
obligo a este fichero
a usar mis datos de
acceso a la base de datos
*/
require '../conexion.php';

try {
 //obtengo los datos del formulario...
 $nombre=htmlentities(addslashes($_POST['txtCorreo']));
 $clave=htmlentities(addslashes($_POST['txtPassword']));

 //variable auxiliar para comprobar que el usuario existe (una forma de hacerlo)
 $contador = 0;
 $conta=0;
 $cont=0;

 //almaceno la consulta SQL
//  $sql = "SELECT * FROM LOGIN WHERE nom_usu = :nombre and pass= :pass";

 $sql = "SELECT * FROM empleados WHERE correo = :nombre";
 $sql1=  "SELECT * FROM cliente where corcli= :nombre";
 $sql2=  "SELECT * from profesor where corpro=:nombre ";
 //preparo la consulta SQL
 $resultado=$conexion->prepare($sql);
 $resultado1=$conexion->prepare($sql1);
 $resultado2=$conexion->prepare($sql2);


 //ejecuto la consulta SQL
 $resultado->execute(array(":nombre"=>$nombre));
 $resultado1->execute(array(":nombre"=>$nombre));
 $resultado2->execute(array(":nombre"=>$nombre));


// print_r(($resultado->fetch()>0)?"empleados" :"MAL"); echo "<hr>";
// print_r(($resultado1->fetch()>0)? "cliente":"MAL" );echo "<hr>";
// print_r(($resultado2->fetch()>0)? "profesor": "MAL");

 //almaceno el resultado en un array asociativo y lo recorro


while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

    if(password_verify($clave, $registro['clave'])) {
        $contador++;
    }
}

  $resultado1=$conexion->prepare($sql1);
 $resultado1->execute(array(":nombre"=>$nombre));
 while($registro=$resultado1->fetch(PDO::FETCH_ASSOC)) {
  
  if(password_verify($clave, $registro['clavecli'])) {
   $conta++;
  }
 }

  $resultado2=$conexion->prepare($sql2);
 $resultado2->execute(array(":nombre"=>$nombre));
 while($registro=$resultado2->fetch(PDO::FETCH_ASSOC)) {
  if(password_verify($clave, $registro['clavepro'])) {
   $cont++;
  }
 }

 if ($contador>0) {
echo '<script>alert("Bienvenido empleado")</script> '; 
 // header("location:crud.php");
 } else if ($conta>0){
 
  echo '<script>alert("Bienvenido cliente")</script> ';
 }else if($cont>0) {
  echo '<script>alert("Bienvenido profesor")</script> ';
 }else{
     echo "el usuario no existe";
 }

 //cierro la conexion
 $conexion = null;
} catch(Exception $e) {
   die($e->getMessage());
}
?>