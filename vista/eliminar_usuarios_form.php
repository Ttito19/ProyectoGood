<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';
include 'partials/head.php';
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
               
                 echo "<script type='text/javascript'>
                 $('body').overhang({
                    type: 'error',
                     message: 'La operacion no se a podido eliminar',
                    duration: 0.5,
                   });
           
                  window.setTimeout(function(){
                    window.location.href ='location:listar_clientes.php';
              }, 1000);
              
                 </script>";     
               
            }

   }
       
} else {
    echo'<script type="text/javascript">
    alert("No se puedo eliminar...");</script>';
}

 include 'partials/footer.php';