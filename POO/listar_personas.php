<?php

//ESTA PARTE DEL CODIGO ES PARA MOSTRAR LOS DATOS QUE HAY EN LA BASE DE DATOS
/*require "conexion.php";

$filas = $db->query ("SELECT * FROM personas;");
foreach($filas as $fila){
print_r($fila);
}*/

$contenido = file_get_contents('datos.json');
$con = utf8_encode($contenido);
$datos = json_decode($con, true, 1024);

foreach ($datos as $product) {
    echo "<pre>";
    print_r($product);
    echo '</pre>';
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
<body>


   <table>
   <thead>
       <tr>
           <th>ID</th>
           <th>Nombre</th>
           <th>Fecha Ingreso</th>
           <th>Puesto</th>
       </tr>
   </thead>
   <tbody>
     <?php foreach($personas as $empleado){ ?>
     <?php echo "<tr>"; ?>
     <?php echo "<td>$datos</td>"; ?>
     <?php echo "</tr>"; ?>
<?php
}
?>
   </tbody>
</table>




</body>
</html>
