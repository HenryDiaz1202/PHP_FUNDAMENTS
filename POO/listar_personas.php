<?php

require "conexion.php";

$query = 'SELECT * FROM personas';
$statement = $db->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de personas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<label for="">Todos los registros desde la base de datos</label>
<table class="table" style="width:90%;border-collapse:collapse;margin-right:auto;margin-left:auto;margin-top:4%;background-color: rgb(243, 243, 243);">
        <thead class="thead-dark">
            <tr>
                <th style="border:solid 1px; font-size:25px;" scope="col" >Id</th>
                <th style="border:solid 1px; font-size:25px;" scope="col">Nombre</th>
                <th style="border:solid 1px; font-size:25px;" scope="col">Apellido</th>
                <th style="border:solid 1px; font-size:25px;" scope="col">Edad</th>
                <th style="border:solid 1px; font-size:25px;" scope="col">Sexo</th>
                <th style="border:solid 1px; font-size:25px;" scope="col">Dirección</th>
               <!-- <th scope="col"></th>-->
                </tr>
        </thead>
        <tbody id="codigo">
                <?php
                    foreach($rows as $row)
                    {
                        ?>
                        <tr>
                            <td style="border:solid 1px; font-size:20px"><?php echo $row['id']; ?></td>
                            <td style="border:solid 1px; font-size:20px"><?php echo $row['nombre']; ?></td>
                            <td style="border:solid 1px; font-size:20px"><?php echo $row['apellido']; ?></td>
                            <td style="border:solid 1px; font-size:20px"><?php echo $row['edad']; ?></td>
                            <td style="border:solid 1px; font-size:20px"><?php echo $row['sexo']; ?></td>
                            <td style="border:solid 1px; font-size:20px"><?php echo $row['direccion']; ?></td>
                        <!--    <td><input type="reset" name="boton" value="Ver"></td>-->
                        <tr>
        </tbody>
                        <?php
                    }
                    ?>                       
    </table>


</body>
</html>
