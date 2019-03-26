<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["idprofesor"]) ) {

        $id    = validar_campo($_GET["idprofesor"]);

    if (usuarioControlador::getEliminarDocente($id)) {

                header("location:listar_docentes.php");
            }

   }
       
} else {
 header("location:listar_docentes.php?error=1");
}