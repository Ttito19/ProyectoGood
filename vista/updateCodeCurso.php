<?php
include '../controlador/cursoControlador.php';
include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( isset($_POST["nomcur"]) && isset($_POST["desc"])) {
        $txtnomcur      = validar_campo($_POST["nomcur"]);
        $txtdesc    = validar_campo($_POST["desc"]);
   


if (isset($_POST["idcurso"])) {
            if (cursoControlador::updateCurso($txtnomcur, $txtdesc, validar_campo($_POST["idcurso"]))) {
                header("location:crudCursos.php");
            }
        } 
    }
} else {
 //header("location:registro_curso.php?error=1");
}