<?php
class cursos{
	private $idcurso;
	private $nomcurso;
	private $descripcion;
	private $turno;
	
	public function getIdcurso(){
		return $this->idcurso;
	}

	public function setIdcurso($idcurso){
		$this->idcurso = $idcurso;
	}

	public function getNomcurso(){
		return $this->nomcurso;
	}

	public function setNomcurso($nomcurso){
		$this->nomcurso = $nomcurso;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getTurno(){
		return $this->turno;
	}

	public function setTurno($turno){
		$this->turno = $turno;
	}

}