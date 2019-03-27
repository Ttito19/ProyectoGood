<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["usuario"])&&isset($_POST["nom"]) && isset($_POST["ape"])&& isset($_POST["cor"]) && isset($_POST["region"]) && isset($_POST["provincia"]) && isset($_POST["distrito"]) && isset($_POST["dni"]) && isset($_POST["cel"])&& isset($_POST["contra"])) {
        $txtcontra   = validar_campo($_POST["contra"]);
       
        $txtnom      = validar_campo($_POST["nom"]);
        $txtape    = validar_campo($_POST["ape"]);
        $txtcor   = validar_campo($_POST["cor"]);
        $txtdepar     = validar_campo($_POST["region"]);
        $txtprov      = validar_campo($_POST["provincia"]);
        $txtdis    = validar_campo($_POST["distrito"]);
        $txtdni   = validar_campo($_POST["dni"]);      
        $txtcel   = validar_campo($_POST["cel"]);
        $pass_cifrado=password_hash($txtcontra,PASSWORD_DEFAULT,array("cost"=>12));
        $txtrol  = validar_campo($_POST["usuario"]); 
     
       

        if (usuarioControlador::registro($txtnom, $txtape,$txtcor, $txtdepar, $txtprov, $txtdis, $txtdni, $txtcel,$pass_cifrado,$txtrol)) {
            $correo   = usuarioControlador::getCorreo($correo, $clave);
           
            header("location:crud.php");
        }
    }
} else {
   header("location:registro_usuario.php?error=1");
}


