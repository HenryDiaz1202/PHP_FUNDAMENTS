<?php 
session_start(); 
$nombres = array(); 
echo $_POST['nombre']; 
if(isset($_POST['nombre'])) {
    if(isset($_SESSION['nombres'])){
         $nombres = $_SESSION['nombres'];
         $nombres[] = $_POST['nombre'];
         $_SESSION['nombres'] = $nombres;
     } else {
       
        $nombres[] = $_POST['nombre'];
        $_SESSION['nombres'] = $nombres;
     }
}
$valores = $_SESSION["nombres"]; foreach($valores as $val) {
    echo "<h3> $val </h3>" ;
}
//session_destroy(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVE</title>
</head>
<body>
  


</body>
</html>
