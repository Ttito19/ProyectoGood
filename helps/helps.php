<?php
/**
 * Función que sirve para validar y limpiar  un campo
 *
 * @param     input         $campo         Tiene que ser campo de tipo POST
 * @return     string
 */




function getRol($p){
$rol="";
	switch ($p) {
		case 1:
		$rol="Admin";		
			break;
				case 2:
		$rol="Cliente";		
			break;
		
			case 3:
		$rol="Docente";		
			break;

		default:
	$rol="No definido";
			break;

	}
			return $rol;
}

function validar_campo($campo)
{
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}
