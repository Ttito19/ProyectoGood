<?php


class Conexion{
 public static function conectar(){
 	try {
 		$cn= new PDO("mysql:host=localhost;dbname=bdgoodpartner","root","");
 		return $cn;
 	} catch (PDOException $ex) {
 		die($ex->getMessage());
 	}
 }
}
