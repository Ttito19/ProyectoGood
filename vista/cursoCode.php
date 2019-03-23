<?php
include '../controlador/cursoControlador.php';
include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtnomcurso"]) && isset($_POST["txtdescripcion"])) {
        $txtnom      = validar_campo($_POST["txtnomcurso"]);
        $txtdesc     = validar_campo($_POST["txtdescripcion"]);
        
        if (cursoControlador::registroCurso($txtnom, $txtdesc)) {
            $correo   = cursoControlador::getCorreoCur($correo, $clave);
           
            header("location:crudCursos.php");
        }
    }
} else {
   header("location:registro_curso.php?error=1");
}