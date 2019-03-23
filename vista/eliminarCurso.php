<?php
include '../controlador/cursoControlador.php';

include '../helps/helps.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["idcurso"]) ) {

        $id    = validar_campo($_GET["idcurso"]);

    if (cursoControlador::getCursoEliminar($id)) {

                header("location:crudCursos.php");
            }

   }
       
} else {
 header("location:crudCursos.php?error=1");
}