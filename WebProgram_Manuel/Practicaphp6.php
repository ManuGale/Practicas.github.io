<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicaphp 6</title>
</head>
<body>
    
       
    <?php
     //Practica 6
     require("config.php");
     echo"<h1>Practica de Conexion a mi servidor de datos MySQL </h1> <br>";
     if($conexion=mysqli_connect($servidor,$usuario,$password,$bd)){
        echo"Conexion exitosa EFICIENTE EFICAS EFERBESENTE";
     }
     else{
        echo"No jalo Tomaste clases con nocheBuena? <br>".mysqli_connect_error();
     }
     echo"<br> <br>";
     mysqli_close($conexion);

    ?>

</body>
</html>