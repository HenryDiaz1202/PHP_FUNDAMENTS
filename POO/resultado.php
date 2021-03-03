<?php

session_start();
require_once('personas.class.php');
require ('conexion.php');

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

//$_SESSION['sesion'] = $array;
//print_r($_SESSION['sesion']);


$json_string = json_encode($array);
$file = 'datos.json';
file_put_contents($file, $json_string, FILE_APPEND | LOCK_EX); 

////////////////

//echo("<h3> Usuarios guardados.");


$nombres = array(); 
//echo $_POST['Nombre_']; 
if(isset($_POST['Nombre_'])) {
if(isset($_SESSION['nombres'])){
$nombres = $_SESSION['nombres'];
$nombres[] = $_POST['Nombre_'];
$_SESSION['nombres'] = $nombres;
} else {
$nombres[] = $_POST['Nombre_'];
$_SESSION['nombres'] = $nombres;
}
}
$valores = $_SESSION["nombres"];
/*foreach ($valores as $val){
	echo "Usuario  :  ".$val;
}
*/
////////////////

$query = <<<SQL
INSERT INTO personas (nombre,apellidos,edad,sexo,direccion)
VALUES (:nombre,:apellidos,:edad,:sexo,:direccion)
SQL;
$statement = $db->prepare($query);
$params = [
    'nombre' => $personas->getNombre(),
    'apellidos' => $personas->getApellidos(),
    'edad' => $personas->getEdad(),
    'sexo' => $personas->getSexo(),
    'direccion' => $personas->getDireccion(),
];
$statement->execute($params);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de personas</title>
</head>
<body>
    
<table class="table" style="width:40%;border-collapse:collapse;margin-top:4%;background-color: rgb(243, 243, 243);">
        <thead class="thead-dark">
            <tr>
                <th style="background-color:red;color:white;border:solid 1px; font-size:25px;" scope="col">USUARIOS REGISTRADOS</th>
               <!-- <th scope="col"></th>-->
                </tr>
        </thead>
        <tbody id="codigo">
                <?php
                    foreach($valores as $val)
                    {
                        ?>
                        <tr style="background-color:green;color:white;">
                            <td style="text-align:center;border:solid 1px; font-size:20px"><?php echo $val; ?></td>
                        <tr>
        </tbody>
                        <?php
                    }
                    ?>                       
    </table>

<h1> Último usuario registrado </h1>

<?php
$ultimo = end($valores);
echo $ultimo;

?>


</body>
</html>
