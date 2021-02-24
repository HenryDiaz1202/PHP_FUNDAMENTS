<?php
    $nombre = $_GET["nombre"];
    $correo = $_GET["correo"];
    $fechaN = $_GET["fechaN"];

    $actual=2021;

    $anio = $fechaN[0];
    $anio1 = $fechaN[1];
    $anio2 = $fechaN[2];
    $anio3 = $fechaN[3];

    $fechaA = $anio.$anio1.$anio2.$anio3;
    $edad = $actual - $fechaA;

    if($edad < 18){
        echo "eres menor";
    }
    else{
        echo "BIENVENIDO A NUESTRA WEB ".$nombre;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:black;color:white">
    
</body>
</html>
