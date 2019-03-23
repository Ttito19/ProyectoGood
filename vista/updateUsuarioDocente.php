<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( isset($_POST["nom"]) && isset($_POST["ape"]) && isset($_POST["cor"]) && isset($_POST["dni"]) && isset($_POST["cel"]) && isset($_POST["contra"])) {
        $txtnom      = validar_campo($_POST["nom"]);
        $txtape    = validar_campo($_POST["ape"]);
        $txtcor   = validar_campo($_POST["cor"]);      
        $txtdni   = validar_campo($_POST["dni"]);      
        $txtcel   = validar_campo($_POST["cel"]);
        $txtcontra   = validar_campo($_POST["contra"]);


if (isset($_POST["id"])) {
            if (usuarioControlador::updateDocente($txtnom, $txtape, $txtcor, $txtdni, $txtcel, $txtcontra, validar_campo($_POST["id"]))) {
                header("location:listar_docentes.php");
                return true;
            }
        }
    }
} else {
 header("location:registroCliProf.php?error=1");
}

