<?php

$rango = $_POST["numero"];
$datos;

$val_c;
$val_v;
$suma=0;

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
echo ("<h3> ----------------------------------------------------------------------------------------------------------------------  </h3>");
$datos = array_count_values($datos);
asort($datos);

foreach ($datos as $c => $v) {
    echo "Numero = "." $c Cantidad se repite = $v <br />";
    $suma += $c;	
}
echo "SUMA : ".$suma;
echo ("<h3> ----------------------------------------------------------------------------------------------------------------------  </h3>");

if($v == 1)
{
echo ("<h3> NO HAY NUMERO QUE SE REPITA MAS. </h3>");
}
else
{
echo ("<h3> EL NÚMERO QUE MÁS SE REPITE ES :   **  $c  **  Y SE REPITE : **  $v  ** VECES.</h3>");
}
//
$resta= $c * $v;
echo "RESTA : ".$resta;
$total = ($suma - $resta);
//
if($v == 1)
{
echo ("<h3> ----------------------------------------------------------------------------------------------------------------------  </h3>");
echo "<h3> HACEMOS LA SUMA DE TODOS LOS NUMEROS YA QUE NO HAY NINGUNO QUE SE REPITA.  </h3>";
echo "TOTAL = ".$suma;
}
else
{
echo ("<h3> ----------------------------------------------------------------------------------------------------------------------  </h3>");

echo "<h3> SUMA DEL RESTO DE NUMEROS SIN INCLUIR EL QUE MAS SE REPITE. </h3>";
echo "TOTAL = ".$total;
}

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
