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

$usr [] = array();

$_SESSION['sesion'] = $array;
//print_r($_SESSION['sesion']);

$usr=array($_SESSION['sesion']);

$json_string = json_encode($array);
$file = 'datos.json';
file_put_contents($file, $json_string, FILE_APPEND | LOCK_EX); 

$jsonfile = file_get_contents("datos.json");
$arrayjson = json_decode($jsonfile,true);
foreach($arrayjson as $arr){
print_r($arr);
}
echo ("--------------------------------------------------------------------------------------------------------");
echo ("<h3> Usuario Ingresado </h3>");

echo ("<br>--------------------------------------------------------------------------------------------------------");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>
