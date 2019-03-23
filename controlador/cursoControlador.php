<?php
include  '../datos/usuarioDao.php';
class cursoControlador{

public function getCorreoCur($correo,$clave){
$obj_correo=new empleado();
	$obj_correo->setCorreo($correo);
		$obj_correo->setClave($clave);
		return UsuarioDao::getCorreo($obj_correo);
}


public function registroCurso($nom, $descrip)
    {
        $obj_curso = new cursos();
        $obj_curso->setNomcurso($nom);
        $obj_curso->setDescripcion($descrip);       
        return usuarioDao::registraCurDao($obj_curso);
    }



    public function getCursos(){
    return UsuarioDao::getCursos();
}

    public function getCursoId($id){
    return UsuarioDao::getCursoPorId($id);
    }


public function updateCurso($nomcurso, $descricion, $idcurso)
    {
        $obj_cursos = new cursos();
        $obj_cursos->setNomcurso($nomcurso);
        $obj_cursos->setDescripcion($descricion);     
        $obj_cursos->setIdcurso($idcurso);
        return UsuarioDao::updateCursoDao($obj_cursos);
    }
     public function getCursoEliminar($id){
        return UsuarioDao::getCursoEliminar($id);
    }


}