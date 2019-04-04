<?php 
session_start();
try{
    $usuario = 'root';
    $password='';

    $conn = new PDO('mysql:host=localhost;dbname=bdgoodpartner', $usuario, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}
$nombre=htmlentities(addslashes($_POST['txtCorreo']));
$clave=htmlentities(addslashes($_POST['txtPassword']));




$sql = $conn->prepare('SELECT idempleado,correo,clave,nombre, e.tipo from empleados e INNER join  tipo t on e.tipo=t.tipo where correo   = :nombre'); 
$sql->execute(array(':nombre' => $nombre));
$resultado = $sql->fetch(PDO::FETCH_ASSOC);

$sql1 = $conn->prepare('SELECT * from cliente c INNER join  tipo t on c.tipo=t.tipo where corcli   = :nomcli'); 
$sql1->execute(array(':nomcli' => $nombre));
$resultado1 = $sql1->fetch(PDO::FETCH_ASSOC);

$sql2 = $conn->prepare('SELECT * from profesor p INNER join  tipo t on p.tipo=t.tipo where corpro   = :nompro'); 
$sql2->execute(array(':nompro' => $nombre));
$resultado2 = $sql2->fetch(PDO::FETCH_ASSOC);

if ($resultado ) { //Retorna TRUE en caso de encontrar datos referentes al USUARIO
         if (password_verify($clave,$resultado['clave']) ) {//Validamos que coincidan las Contraseñas

            if ($resultado['tipo'] == 1) {//Validamos los Tipos de Cuenta del Usuario
                $_SESSION['nombre'] = $resultado['nombre'];
              //  echo "<script>alert('Eres Administrador') </script>"  ;
                header("Location: admin.php");

            } 
        } else {
            echo "<script>alert('Contraseña Incorrecta'); location.href='index.php'</script>";
         }

}else if($resultado1 ){
         if (password_verify($clave,$resultado1['clavecli'])) {//Validamos que coincidan las Contraseñas

            if ($resultado1['tipo'] == 2) {//Validamos los Tipos de Cuenta del Usuario
                $_SESSION['nomcli'] = $resultado1['nomcli'];
              //  echo "<script>alert('Eres cliente') </script>"  ;
                 header("Location: usuario.php");

        } 
    } else {
        echo "Contraseña incorrecta del cliente";
     }
}else if($resultado2){
    if (password_verify($clave,$resultado2['clavepro'])) {//Validamos que coincidan las Contraseñas

        if ($resultado2['tipo'] == 3) {//Validamos los Tipos de Cuenta del Usuario
            $_SESSION['nompro'] = $resultado2['nompro'];
         //   echo "<script>alert('Eres Docente') </script>"  ;
             header("Location: docente.php");

    } 
} else {
    echo "Contraseña incorrecta del Docente";
 }
}else {
    echo "<script>alert('Usuario no exixte'); location.href='index.php'</script>";
   
}

