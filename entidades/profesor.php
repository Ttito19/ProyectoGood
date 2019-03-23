<?php
class profesor{
	private $idprofesor;
	private $nombre;
	private $apellido;
	private $correo;
	private $nomdepa;
	private $nomprov;
	private $nomdis;
	private $dni;
    private $celular;
    private $clave;
    private $idempleado;
    private $tipo;
    
public function getIdprofesor(){
		return $this->idprofesor;
	}

	public function setIdprofesor($idprofesor){
		$this->idprofesor = $idprofesor;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getNomdepa(){
		return $this->nomdepa;
	}

	public function setNomdepa($nomdepa){
		$this->nomdepa = $nomdepa;
	}

	public function getNomprov(){
		return $this->nomprov;
	}

	public function setNomprov($nomprov){
		$this->nomprov = $nomprov;
	}

	public function getNomdis(){
		return $this->nomdis;
	}

	public function setNomdis($nomdis){
		$this->nomdis = $nomdis;
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getClave(){
		return $this->clave;
	}

	public function setClave($clave){
		$this->clave = $clave;
	}

	public function getIdempleado(){
		return $this->idempleado;
	}

	public function setIdempleado($idempleado){
		$this->idempleado = $idempleado;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

}