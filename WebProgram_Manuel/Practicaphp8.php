<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicaphp 8</title>
</head>
<body>
    
       
    <?php
     //Practica 8

     require("config.php");
     echo"<h1>Practica eliminar base de datos MySQL </h1> <br>";
          $conexion=mysqli_connect($servidor,$usuario,$password,$bd);
          $basededatos="progweb"; 
             $consulta="drop database $basededatos";
             if($resultado=mysqli_query($conexion,$consulta)){
                 echo"La base de datos $basededatos ya no existe? <br> ";
                 echo"El script utilizado fue $consulta<br> <br>";
             }else{
                 echo"la base de datos $basededatos ya fue tilin no esta ";
             }
             echo"<br><br>";
              mysqli_close($conexion);


    ?>

</body>
</html>