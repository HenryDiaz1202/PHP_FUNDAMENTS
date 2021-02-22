<?php

function encontrar($datos){
$valores = array_count_values($datos);
arsort($valores);
return  count($valores) > 0 ? [array_key_first($valores), $valores[array_key_first($valores)]] : ["",0];
}


$rango = $_POST["numero"];
$datos;


if($rango <= 0 || $rango > 20)
{
echo('<h1 style="color:white;margin-top:80px;display:inline-block;" >"El valor debe estar en el rango establecido mayor que 0 y menor que 20"</h1>"');
}
else{



for($i=0; $i<1000000; $i++){
$num = rand(1,100000);
if($num <= $rango){
$datos[$num]++;
}
}
echo ("<h3> LISTA DE NÚMEROS CAPTADOS  </h3>");
for($a=0; $a<=$rango; $a++){
echo ("<h4> $datos[$a] </h4>");
}
}
echo ("<h3> EL NÚMERO QUE MÁS SE REPITE ES :   </h3>");
echo(encontrar($datos));

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RANDOMS</title>
</head>
<body style="background-color:white;">

</body>
</html>
