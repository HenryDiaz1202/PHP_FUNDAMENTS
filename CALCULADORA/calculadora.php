<?php
$val_a = $_POST["valor_a"];
$val_b = $_POST["valor_b"];

$opcion = $_POST["rd"];

switch($opcion){
case 1:
echo("LA SUMA DE LOS NUMEROS ES : "); 
echo($val_a+$val_b);
break;
case 2:
echo("LA RESTA DE LOS NUMEROS ES : "); 
echo($val_a-$val_b);
break;
case 3: 
if($val_b == 0)
{
echo("No se puede dividir entre 0");
} 
else
{
echo("LA DIVISION DE LOS NUMEROS ES : "); 
echo($val_a/$val_b);
}
break;
case 4: 
echo("LA MULTIPLICACION DE LOS NUMEROS ES : "); 
echo($val_a*$val_b);
break;
}

?>
