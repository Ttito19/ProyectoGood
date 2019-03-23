<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tipos"])&&isset($_POST["clipro"])&&isset($_POST["nom"]) && isset($_POST["ape"])&& isset($_POST["cor"]) && isset($_POST["lista_reproduccion"]) && isset($_POST["videos"]) && isset($_POST["dis"]) && isset($_POST["dni"]) && isset($_POST["cel"])&& isset($_POST["contra"])) {
      
      $txtcontra    = validar_campo($_POST["contra"]);

        $txtidemp  = validar_campo($_POST["tipos"]);
        $txttipo   = validar_campo($_POST["clipro"]); 
        $txtnom    = validar_campo($_POST["nom"]);
        $txtape    = validar_campo($_POST["ape"]);
        $txtcor    = validar_campo($_POST["cor"]);
        $txtdepa   = validar_campo($_POST["lista_reproduccion"]);
        $txtprov   = validar_campo($_POST["videos"]);
        $txtdis    = validar_campo($_POST["dis"]);
        $txtdni    = validar_campo($_POST["dni"]);      
        $txtcel    = validar_campo($_POST["cel"]);
        $pass_cifrado=password_hash($txtcontra,PASSWORD_DEFAULT,array("cost"=>12));
      

     
       if ($txttipo==2) {
              if (usuarioControlador::registroCli($txtnom, $txtape,$txtcor, $txtdepa, $txtprov, $txtdis, $txtdni, $txtcel, $pass_cifrado,$txtidemp,$txttipo)) {
            $correo = usuarioControlador::getCorreoCli($correo, $clave);
           
            header("location:listar_clientes.php");
        }
       }else if($txttipo==3) {
              if (usuarioControlador::registroPro($txtnom, $txtape,$txtcor, $txtdepa, $txtprov, $txtdis, $txtdni, $txtcel, $pass_cifrado,$txtidemp,$txttipo)) {
            $correo = usuarioControlador::getCorreoPro($correo, $clave);
           
            header("location:listar_docentes.php");
        }

        }


        } 


    }else {
   header("location:registroUserCode.php?error=1");
}
