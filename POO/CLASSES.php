<?php

class Personas{

private $nombre;
private $apellidos;
private $edad;
private $sexo;
private $direccion;

//CONSTRUCTOR
public function Personas(){}

public function getNombre() { return $this->nombre; }
public function getApellidos() { return $this->apellidos; }
public function getEdad() { return $this->edad; }
public function getSexo() { return $this->sexo; }
public function getDireccion() { return $this->direccion; }

public function setNombre($nomb) { return $this->nombre = $nomb; }
public function setApellidos($aplls) { return $this->apellidos = $aplls; }
public function setEdad($edd) { return $this->edad = $edd; }
public function setSexo($sxo) { return $this->sexo = $sxo; }
public function setDireccion($dircc) { return $this->direccion = $dircc; }


}






?>
