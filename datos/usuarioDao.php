<?php
include 'conexion.php';
include '../entidades/empleado.php';
include '../entidades/cliente.php';
include '../entidades/profesor.php';
include '../entidades/curso.php';
class UsuarioDao extends Conexion
{
protected static $cnx;
private static function getConexion(){
	self::$cnx=Conexion::conectar();
}
private static function desconectar(){
	self::$cnx=null;
}

public static function login($correo){

$query="SELECT * FROM empleados WHERE correo= :correo AND clave= :clave";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindValue(":correo",$correo->getCorreo());
$resultado->bindValue(":clave",$correo->getClave());
$resultado->execute();
if($resultado->rowCount()>0){
$filas=$resultado->fetch();
if($filas["correo"] == $correo->getCorreo() && $filas["clave"] == $correo->getClave()){
return true;
}
   }
   return false;
   }

public static function getCorreo($correo){

$query="SELECT  idempleado,nombre,apellido,correo,nomdepa,nomprov,nomdis,dni,celular,clave,tipo  FROM empleados WHERE correo= :correo AND clave= :clave";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindValue(":correo",$correo->getCorreo());
$resultado->bindValue(":clave",$correo->getClave());
$resultado->execute();
$filas=$resultado->fetch();
$correo= new empleado();
$correo->setIdempleado($filas["idempleado"]);
$correo->setNombre($filas["nombre"]);
$correo->setApellido($filas["apellido"]);
$correo->setCorreo($filas["correo"]);
$correo->setNomdepa($filas["nomdepa"]);
$correo->setNomprov($filas["nomprov"]);
$correo->setNomdis($filas["nomdis"]);
$correo->setDni($filas["dni"]);
$correo->setCelular($filas["celular"]);
$correo->setClave($filas["clave"]);
$correo->setTipo($filas["tipo"]);
return $correo;

}


public static function loginClie($correo){

$query="SELECT * FROM cliente WHERE corcli= :correo AND clavecli= :clave";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindValue(":correo",$correo->getCorreo());
$resultado->bindValue(":clave",$correo->getClave());
$resultado->execute();
if($resultado->rowCount()>0){
$filas=$resultado->fetch();
if($filas["corcli"] == $correo->getCorreo() && $filas["clavecli"] == $correo->getClave()){
return true;
}
   }
   return false;
   }

public static function getCorreoClie($correo){

$query="SELECT idcliente,nomcli,apecli,corcli,nomdepacli,nomprovcli,nomdiscli,dnicli,celcli,clavecli,idempleado,tipo  FROM cliente WHERE corcli= :correo AND clavecli= :clave";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindValue(":correo",$correo->getCorreo());
$resultado->bindValue(":clave",$correo->getClave());
$resultado->execute();
$filas=$resultado->fetch();
$correo= new cliente();
$correo->setIdcliente($filas["idcliente"]);
$correo->setNombre($filas["nomcli"]);
$correo->setApellido($filas["apecli"]);
$correo->setCorreo($filas["corcli"]);
$correo->setNomdepa($filas["nomdepacli"]);
$correo->setNomprov($filas["nomprovcli"]);
$correo->setNomdis($filas["nomdiscli"]);
$correo->setDni($filas["dnicli"]);
$correo->setCelular($filas["celcli"]);
$correo->setClave($filas["clavecli"]);
$correo->setIdempleado($filas["idempleado"]);
$correo->setTipo($filas["tipo"]);
return $correo;

}


public static function loginProfe($correo){

$query="SELECT * FROM profesor WHERE corpro= :correo AND clavepro= :clave";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindValue(":correo",$correo->getCorreo());
$resultado->bindValue(":clave",$correo->getClave());
$resultado->execute();
if($resultado->rowCount()>0){
$filas=$resultado->fetch();
if($filas["corpro"] == $correo->getCorreo() && $filas["clavepro"] == $correo->getClave()){
return true;
}
   }
   return false;
   }

public static function getCorreoProfe($correo){

$query="SELECT  idprofesor,nompro,apepro,corpro,nomdepapro,nomprovpro,nomdispro,dnipro,celpro,clavepro,idempleado,tipo  FROM profesor WHERE corpro= :correo AND clavepro= :clave";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindValue(":correo",$correo->getCorreo());
$resultado->bindValue(":clave",$correo->getClave());
$resultado->execute();
$filas=$resultado->fetch();
$correo= new profesor();
$correo->setIdprofesor($filas["idprofesor"]);
$correo->setNombre($filas["nompro"]);
$correo->setApellido($filas["apepro"]);
$correo->setCorreo($filas["corpro"]);
$correo->setNomdepa($filas["nomdepapro"]);
$correo->setNomprov($filas["nomprovpro"]);
$correo->setNomdis($filas["nomdispro"]);
$correo->setDni($filas["dnipro"]);
$correo->setCelular($filas["celpro"]);
$correo->setClave($filas["clavepro"]);
$correo->setIdempleado($filas["idempleado"]);
$correo->setTipo($filas["tipo"]);
return $correo;

}


public static function getEmpleados(){

$query="call sp_registrar_select()";
self::getConexion();
$resultado=self::$cnx->prepare($query);

$resultado->execute();
$filas=$resultado->fetchAll();

return $filas;

}

public static function getDocente(){

$query="call sp_docente_select()";
self::getConexion();
$resultado=self::$cnx->prepare($query);

$resultado->execute();
$filas=$resultado->fetchAll();

return $filas;

}

public static function getCliente(){

$query="call sp_cliente_select()";
self::getConexion();
$resultado=self::$cnx->prepare($query);

$resultado->execute();
$filas=$resultado->fetchAll();

return $filas;

}





public static function registraDao($correo)
    {
        $query = "INSERT INTO empleados (nombre,apellido,correo,nomdepa,nomprov,nomdis,dni,celular,clave,tipo) VALUES (:nom,:ape,:cor,:depa,:prov,:dis,:dni,:cel,:cla,:tipo)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindValue(":nom", $correo->getNombre());
        $resultado->bindValue(":ape", $correo->getApellido());   
        $resultado->bindValue(":cor", $correo->getCorreo());       
        $resultado->bindValue(":depa",$correo->getNomdepa());
        $resultado->bindValue(":prov",$correo->getNomprov());
        $resultado->bindValue(":dis", $correo->getNomdis());
        $resultado->bindValue(":dni", $correo->getDni());
        $resultado->bindValue(":cel", $correo->getCelular());
        $resultado->bindValue(":cla", $correo->getClave());       
        $resultado->bindValue(":tipo", $correo->getTipo());
        if ($resultado->execute()) {
            return true;
        }
        return false;
    }






public static function registraCliDao($correo)
    {
        $query = "INSERT INTO cliente (nomcli,apecli,corcli,nomdepacli,nomprovcli,nomdiscli,dnicli,celcli,clavecli,idempleado,tipo) VALUES (:nom,:ape,:cor,:depa,:prov,:dis,:dni,:cel,:cla,:idemp,:tipo)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindValue(":nom", $correo->getNombre());
        $resultado->bindValue(":ape", $correo->getApellido());   
        $resultado->bindValue(":cor", $correo->getCorreo());       
        $resultado->bindValue(":depa",$correo->getNomdepa());
        $resultado->bindValue(":prov",$correo->getNomprov());
        $resultado->bindValue(":dis", $correo->getNomdis());
        $resultado->bindValue(":dni", $correo->getDni());
        $resultado->bindValue(":cel", $correo->getCelular());
        $resultado->bindValue(":cla", $correo->getClave()); 
        $resultado->bindValue(":idemp", $correo->getIdempleado()); 
        $resultado->bindValue(":tipo", $correo->getTipo());
        if ($resultado->execute()) {
            return true;
        }
        return false;
    }




public static function registraProDao($correo)
    {
        $query = "INSERT INTO profesor (nompro,apepro,corpro,nomdepapro,nomprovpro,nomdispro,dnipro,celpro,clavepro,idempleado,tipo) VALUES (:nom,:ape,:cor,:depa,:prov,:dis,:dni,:cel,:cla,:idemp,:tipo)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindValue(":nom", $correo->getNombre());
        $resultado->bindValue(":ape", $correo->getApellido());   
        $resultado->bindValue(":cor", $correo->getCorreo());       
        $resultado->bindValue(":depa",$correo->getNomdepa());
        $resultado->bindValue(":prov",$correo->getNomprov());
        $resultado->bindValue(":dis", $correo->getNomdis());
        $resultado->bindValue(":dni", $correo->getDni());
        $resultado->bindValue(":cel", $correo->getCelular());
        $resultado->bindValue(":cla", $correo->getClave()); 
        $resultado->bindValue(":idemp", $correo->getIdempleado());   
        $resultado->bindValue(":tipo", $correo->getTipo());
        if ($resultado->execute()) {
            return true;
        }
        return false;
    }



    public static function updateDao($update)
    {

  if (!is_null($update->getIdempleado())) {
      
               $query = "UPDATE  empleados SET nombre=:nom,apellido=:ape,correo=:cor,dni=:dni,celular=:cel,clave=:cla where  idempleado=:id";
        }

    self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $nom       = $update->getNombre();
        $ape       = $update->getApellido();
        $cor       = $update->getCorreo();
        $dni       = $update->getDni();
        $cel       = $update->getCelular();
        $cla       = $update->getClave();
        $id        = $update->getIdempleado();

        $resultado->bindParam(":nom", $nom);
        $resultado->bindParam(":ape", $ape);
        $resultado->bindParam(":cor", $cor);
        $resultado->bindParam(":dni", $dni);
        $resultado->bindParam(":cel", $cel);
        $resultado->bindParam(":cla", $cla);
        $resultado->bindParam(":id", $id);  

        if ($resultado->execute()) {
            return true;
        }
        return false;
    }

public static function getCorreoPorId($id){
$query="call sp_select_id(:id)";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindParam(":id",$id);
$resultado->execute();
$filas=$resultado->fetch();
$correo= new empleado();
$correo->setIdempleado($filas["idempleado"]);
$correo->setNombre($filas["nombre"]);
$correo->setApellido($filas["apellido"]);
$correo->setCorreo($filas["correo"]);
$correo->setDni($filas["dni"]);
$correo->setCelular($filas["celular"]);


return $correo;

}


public static function getEliminar($id){

$query="call sp_eliminar_empleados(:id)";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindParam(":id",$id);
$resultado->execute();
  if ($resultado->execute()) {
            return true;
        }
        return false;
    }
    
    public static function getEliminarDocente($id){

        $query="call sp_eliminar_profesor(:id)";
        self::getConexion();
        $resultado=self::$cnx->prepare($query);
        $resultado->bindParam(":id",$id);
        $resultado->execute();
          if ($resultado->execute()) {
                    return true;
                }
                return false;
            }
    public static function getEliminarCliente($id){

        $query="call sp_eliminar_cliente(:id)";
        self::getConexion();    
        $resultado=self::$cnx->prepare($query);
        $resultado->bindParam(":id",$id);
        $resultado->execute();
         if ($resultado->execute()) {
                    return true;
           }
                    return false;
                    }
                
        











public static function updateDocenteDao($update)
    {

  if (!is_null($update->getIdprofesor())) {
      
               $query = "UPDATE  profesor SET nompro=:nom,apepro=:ape,corpro=:cor,dnipro=:dni,celpro=:cel,clavepro=:cla where  idprofesor=:id";
        }

    self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $nom       = $update->getNombre();
        $ape       = $update->getApellido();
        $cor       = $update->getCorreo();
        $dni       = $update->getDni();
        $cel       = $update->getCelular();
        $cla       = $update->getClave();
        $id        = $update->getIdprofesor();

        $resultado->bindParam(":nom", $nom);
        $resultado->bindParam(":ape", $ape);
        $resultado->bindParam(":cor", $cor);
        $resultado->bindParam(":dni", $dni);
        $resultado->bindParam(":cel", $cel);
        $resultado->bindParam(":cla", $cla);
        $resultado->bindParam(":id", $id);  

        if ($resultado->execute()) {
            return true;
        }
        return false;
    }

public static function getDocentePorId($id){
$query="call sp_docente_id(:id)";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindParam(":id",$id);
$resultado->execute();
$filas=$resultado->fetch();
$correo= new profesor();
$correo->setIdprofesor($filas["idprofesor"]);
$correo->setNombre($filas["nompro"]);
$correo->setApellido($filas["apepro"]);
$correo->setCorreo($filas["corpro"]);
$correo->setDni($filas["dnipro"]);
$correo->setCelular($filas["celpro"]);


return $correo;

}


public static function updateClienteDao($update)
    {

  if (!is_null($update->getIdcliente())) {
      
               $query = "UPDATE  cliente SET nomcli=:nom,apecli=:ape,corcli=:cor,dnicli=:dni,celcli=:cel,clavecli=:cla where  idcliente=:id";
        }

    self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $nom       = $update->getNombre();
        $ape       = $update->getApellido();
        $cor       = $update->getCorreo();
        $dni       = $update->getDni();
        $cel       = $update->getCelular();
        $cla       = $update->getClave();
        $id        = $update->getIdcliente();

        $resultado->bindParam(":nom", $nom);
        $resultado->bindParam(":ape", $ape);
        $resultado->bindParam(":cor", $cor);
        $resultado->bindParam(":dni", $dni);
        $resultado->bindParam(":cel", $cel);
        $resultado->bindParam(":cla", $cla);
        $resultado->bindParam(":id", $id);  

        if ($resultado->execute()) {
            return true;
        }
        return false;
    }

public static function getClientePorId($id){
$query="call sp_cliente_id(:id)";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindParam(":id",$id);
$resultado->execute();
$filas=$resultado->fetch();
$correo= new cliente();
$correo->setIdcliente($filas["idcliente"]);
$correo->setNombre($filas["nomcli"]);
$correo->setApellido($filas["apecli"]);
$correo->setCorreo($filas["corcli"]);
$correo->setDni($filas["dnicli"]);
$correo->setCelular($filas["celcli"]);


return $correo;

}

public static function getCursoPorId($id){
$query="call sp_select_curso_id(:id)";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindParam(":id",$id);
$resultado->execute();
$filas=$resultado->fetch();
$curso= new cursos();
$curso->setIdcurso($filas["idcurso"]);
$curso->setNomcurso($filas["nomcurso"]);
$curso->setDescripcion($filas["descripcion"]);

return $curso;

}


 public static function registraCurDao($curso)
   {
        $query = "INSERT INTO curso (nomcurso,descripcion) VALUES (:nom,:descrip)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindValue(":nom", $curso->getNomcurso());
        $resultado->bindValue(":descrip", $curso->getDescripcion());
     
        if ($resultado->execute()) {
            return true;
        }
        return false;
   }




public static function getCursos(){

$query="select idcurso,nomcurso,descripcion  from curso";
self::getConexion();
$resultado=self::$cnx->prepare($query);

$resultado->execute();
$filas=$resultado->fetchAll();

return $filas;

}


public static function updateCursoDao($update)
    {

  if (!is_null($update->getIdcurso())) {
      
               $query = "UPDATE  curso SET   nomcurso=:nomcur,descripcion=:des where idcurso=:id";
        }

    self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $nomcur    = $update->getNomcurso();
        $des       = $update->getDescripcion();
        $idcur     = $update->getIdcurso();

        $resultado->bindParam(":nomcur", $nomcur);
        $resultado->bindParam(":des", $des);
        $resultado->bindParam(":id", $idcur);  

        if ($resultado->execute()) {
            return true;
        }
        return false;
    }

public static function getCursoEliminar($id){

$query="delete from curso where idcurso=:id";
self::getConexion();
$resultado=self::$cnx->prepare($query);
$resultado->bindParam(":id",$id);
$resultado->execute();
  if ($resultado->execute()) {
            return true;
        }
        return false;
    }
}