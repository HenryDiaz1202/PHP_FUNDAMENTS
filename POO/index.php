<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>PERSONAS</title>
</head>
<body>
    <form method="POST" action="resultado.php">
        <div id="izquierda">
            <label for="">Nombre</label>
            <input class="txt" type="text" name="Nombre_" id="">
            <label for="">Edad</label>
            <input type="number" class="txt" name="Edad_" id="">
        </div>
        <div id="derecha">
            <label for="">Apellidos</label>
            <input class="txt" type="text" name="Apellidos_" id="">
            <label for="">Sexo</labe>
            
		<select name="slct" id="select" >
                <option class="op" value="Masculino">MASCULINO</option>
                <option value="Femenino" class="op">FEMENINO</option>
                </select>
        </div>
        <div id="abajo">
            <label id="lbl" for="">Dirección</label>
            <input id="txtt" placeholder="Departamento,ciudad y barrio" type="text" name="Direccion_" id="">
            <input id="save" type="submit" value="Guardar"> 
        </div>
    </form> 
</body>
</html>
