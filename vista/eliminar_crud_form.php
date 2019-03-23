<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["idempleado"]) ) {

        $id    = validar_campo($_GET["idempleado"]);

    if (usuarioControlador::getEliminar($id)) {

                header("location:crud.php");
            }

   }
       
} else {
 header("location:crud.php?error=1");
}