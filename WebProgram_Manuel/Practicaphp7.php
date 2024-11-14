<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicaphp 7</title>
</head>
<body>
           
    <?php
     //Practica 7
     require("config.php");
     echo"<h1>Practica crear base de datos MySQL </h1> <br>";
          $conexion=mysqli_connect($servidor,$usuario,$password,$bd);
          $basededatos="progweb";
             echo"Conexion exitosa EFICIENTE EFICAS EFERBESENTE";
          
             $consulta="create database $basededatos";
             if($resultado=mysqli_query($conexion,$consulta)){
                 echo"La base de datos $basededatos si jalo amonos <br> ";
                 echo"El script utilizado fue $consulta<br> <br>";
             }else{
                 echo"la base de datos $basededatos ya fue tilin Llama ";
             }
             echo"<br><br>";
              mysqli_close($conexion);
              echo '<img src="..\WebProgram_Manuel\img/creacionbd.png" alt="Creación de la base de datos">';

    ?>

    <!-- Aquí agregamos la imagen en HTML -->
    <img src="..\WebProgram_Manuel\img/creacionbd.png" alt="Creación de la base de datos" style="max-width: 100%; height: auto;">

</body>
</html>