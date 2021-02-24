<?php

session_start();
require_once('personas.class.php');

$personas = new Personas();

$nombre = $_POST["Nombre_"];
$apellidos = $_POST["Apellidos_"];
$edad = $_POST["Edad_"];
$sexo = $_POST["slct"];
$direcc = $_POST["Direccion_"];

$personas->setNombre($nombre);
$personas->setApellidos($apellidos);
$personas->setEdad($edad);
$personas->setSexo($sexo);
$personas->setDireccion($direcc);


$array[] = array( "PERSONAS" => array ('Nombre : '=>$personas->getNombre(),'Apellidos : '=>$personas->getApellidos(),'Edad : '=>$personas->getEdad(),'Sexo : '=>$personas->getSexo(),'Direccion : '=>$personas->getDireccion()));

$_SESSION['sesion'] = $array;
//print_r($_SESSION['sesion']);

$json_string = json_encode($array);
$file = 'datos.json';
file_put_contents($file, $json_string, FILE_APPEND | LOCK_EX); 

echo("ver json");
$jsonfile = file_get_contents("datos.json");
$arrayjson = json_decode($jsonfile,true);
foreach($arrayjson as $arr){
print_r($arr);
}

?>
