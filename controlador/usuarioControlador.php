<?php
include  '../datos/usuarioDao.php';
class usuarioControlador{
public static function login($correo,$clave){
	$obj_correo=new empleado();
	$obj_correo->setCorreo($correo);
		$obj_correo->setClave($clave);
		return UsuarioDao::login($obj_correo);
} 


public function getCorreo($correo,$clave){
$obj_correo=new empleado();
	$obj_correo->setCorreo($correo);
		$obj_correo->setClave($clave);
		return UsuarioDao::getCorreo($obj_correo);
}

public static function loginCli($correo,$clave){
    $obj_correo=new cliente();
    $obj_correo->setCorreo($correo);
        $obj_correo->setClave($clave);
        return UsuarioDao::loginClie($obj_correo);
} 


public function getCorreoCli($correo,$clave){
$obj_correo=new cliente();
    $obj_correo->setCorreo($correo);
        $obj_correo->setClave($clave);
        return UsuarioDao::getCorreoClie($obj_correo);
}




public static function loginPro($correo,$clave){
    $obj_correo=new profesor();
    $obj_correo->setCorreo($correo);
        $obj_correo->setClave($clave);
        return UsuarioDao::loginProfe($obj_correo);
} 


public function getCorreoPro($correo,$clave){
$obj_correo=new profesor();
    $obj_correo->setCorreo($correo);
        $obj_correo->setClave($clave);
        return UsuarioDao::getCorreoProfe($obj_correo);
}




public function getEmpleados(){
    return UsuarioDao::getEmpleados();
}
public function getDocente(){
    return UsuarioDao::getDocente();
}

public function getCliente(){
    return UsuarioDao::getCliente();
}


public function registro($nombre, $apellido,$correo, $nomdepa, $nomprov, $nomdis, $dni, $celular, $clave,$tipo)
    {
        $obj_correo = new empleado();
        $obj_correo->setNombre($nombre);
        $obj_correo->setApellido($apellido);
        $obj_correo->setCorreo($correo);         
        $obj_correo->setNomdepa($nomdepa);
        $obj_correo->setNomprov($nomprov);
        $obj_correo->setNomdis($nomdis);
        $obj_correo->setDni($dni);
        $obj_correo->setCelular($celular);
        $obj_correo->setClave($clave);
        $obj_correo->setTipo($tipo);
        
        return UsuarioDao::registraDao($obj_correo);
    }
    public function registroCli($nom,$ape,$cor,$depa,$prov,$dis,$dni,$cel,$cla,$idemp,$tipo)
    {
        $obj_correo = new cliente();
        $obj_correo->setNombre($nom);
        $obj_correo->setApellido($ape);         
        $obj_correo->setCorreo($cor);
        $obj_correo->setNomdepa($depa);
        $obj_correo->setNomprov($prov);
        $obj_correo->setNomdis($dis);
        $obj_correo->setDni($dni);
        $obj_correo->setCelular($cel);
        $obj_correo->setClave($cla);
        $obj_correo->setIdempleado($idemp);
        $obj_correo->setTipo($tipo);
        
        return UsuarioDao::registraCliDao($obj_correo);
    }

    public function registroPro($nom,$ape,$cor,$depa,$prov,$dis,$dni,$cel,$cla,$idemp,$tipo)
    {
        $obj_correo = new profesor();
        $obj_correo->setNombre($nom);
        $obj_correo->setApellido($ape);
        $obj_correo->setCorreo($cor);         
        $obj_correo->setNomdepa($depa);
        $obj_correo->setNomprov($prov);
        $obj_correo->setNomdis($dis);
        $obj_correo->setDni($dni);
        $obj_correo->setCelular($cel);
        $obj_correo->setClave($cla);
        $obj_correo->setIdempleado($idemp);
        $obj_correo->setTipo($tipo);
        
        return UsuarioDao::registraProDao($obj_correo);
    }



 


public function update($nombre, $apellido, $correo, $dni, $celular, $clave, $id)
    {
        $obj_correo = new empleado();
        $obj_correo->setNombre($nombre);
        $obj_correo->setApellido($apellido);
        $obj_correo->setCorreo($correo);     
        $obj_correo->setDni($dni);
        $obj_correo->setCelular($celular);
        $obj_correo->setClave($clave);
        $obj_correo->setIdempleado($id);
        return UsuarioDao::updateDao($obj_correo);
    }




public function updateDocente($nombre, $apellido, $correo, $dni, $celular, $clave, $id)
    {
        $obj_correo = new profesor();
        $obj_correo->setNombre($nombre);
        $obj_correo->setApellido($apellido);
        $obj_correo->setCorreo($correo);     
        $obj_correo->setDni($dni);
        $obj_correo->setCelular($celular);
        $obj_correo->setClave($clave);
        $obj_correo->setIdprofesor($id);
        return UsuarioDao::updateDocenteDao($obj_correo);
    }



public function updateCliente($nombre, $apellido, $correo, $dni, $celular, $clave, $id)
    {
        $obj_correo = new cliente();
        $obj_correo->setNombre($nombre);
        $obj_correo->setApellido($apellido);
        $obj_correo->setCorreo($correo);     
        $obj_correo->setDni($dni);
        $obj_correo->setCelular($celular);
        $obj_correo->setClave($clave);
        $obj_correo->setIdcliente($id);
        return UsuarioDao::updateClienteDao($obj_correo);
    }



    
    public function getCorreoPorId($id){
        return UsuarioDao::getCorreoPorId($id);
    }
 public function getDocentPorId($id){
        return UsuarioDao::getDocentePorId($id);
    }
     public function getClientPorId($id){
        return UsuarioDao::getClientePorId($id);
    }






     public function getEliminar($id){
        return UsuarioDao::getEliminar($id);
    }


}