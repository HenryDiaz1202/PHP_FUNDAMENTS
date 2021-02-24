<?php
$nombre = $_POST["nombre"];
$veces = $_POST["repetir"];

$a;
$b;

if($veces <= 20){
//echo $veces;
$a = array_fill(0,20,$nombre); 
}
else if($veces > 20){
$a = array_fill(0,20,$nombre);
$b = array_fill(0,$veces-20,$nombre);
}

/*
for($i=0;$i<$veces;$i++)
{
echo("<br>".$a[$i]);
}
*/

echo "veces = ".$veces;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPETICIONES</title>
</head>
<body>

<table class="table" style="width:20%;border-collapse:collapse;">
<tr style="border: 1px solid rgb(26, 24, 24);">
<th style="border: 2px solid black;">NOMBRE</th>
<th style="border: 2px solid black;">NOMBRE</th>
</tr>

<tbody>
<?php
for($i=0;$i<$veces;$i++)
{
?>
<tr style="border: 1px solid rgb(26, 24, 24);">

<td style="border: 1px solid rgb(26, 24, 24);"><?php echo($a[$i]);?></td> 
<td style="border: 1px solid rgb(26, 24, 24);"><?php echo($b[$i]);?></td> 

</tr>
</tbody>

<?php
}
?>
</table>


</body>
</html>
