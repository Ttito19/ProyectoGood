<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';

session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["idprofesor"]) ) {

        $id    = validar_campo($_GET["idprofesor"]);

    if (usuarioControlador::getEliminarDocente($id)) {

                header("location:listar_docentes.php");
            }else{
                header("location:listar_docentes.php?error=1");
            }

   }elseif (isset($_GET["idcliente"]) ){

       $id    = validar_campo($_GET["idcliente"]);

       if (usuarioControlador::getEliminarCliente($id)) {

                header("location:listar_clientes.php");
            }else{
               
            
               echo '<script type="text/javascript">
               alert("No se pudo eliminar");
               window.location="listar_clientes.php";
               </script>';
            }

   }
       
} else {
    echo'<script type="text/javascript">
    alert("No se puedo eliminar...");</script>';
}

