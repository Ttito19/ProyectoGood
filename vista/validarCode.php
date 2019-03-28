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

if ($resultado) { //Retorna TRUE en caso de encontrar datos referentes al USUARIO
         if (password_verify($clave,$resultado['clave'])) {//Validamos que coincidan las Contraseñas

            if ($resultado['tipo'] == 1) {//Validamos los Tipos de Cuenta del Usuario
                $_SESSION['nombre'] = $resultado['nombre'];
                echo "Eres Administrador";
                header("Location: admin.php");

            }/* else if($resultado['tipo'] == 2){

                $_SESSION['nombre'] = $nombre;
                echo "Eres Normal";
                //header("Location: normal.php"); 
            }*/
        } else {
            echo "Contraseña incorrecta";
         }

} else {
    echo "Usuario no existe";
}