<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicaphp 9</title>
</head>
<body>
           
    <?php
     //Practica 9
     require("config.php");
     echo"<h1>Practica crear base de datos MySQL </h1> <br>";
          $conexion=mysqli_connect($servidor,$usuario,$password,$bd);
          $tabla="tienda";
          $campos="(codigo int(7), nombre varchar (25), precio int (5))";
             $consulta="create table $tabla $campos";
             if($resultado=mysqli_query($conexion,$consulta)){
                echo"La tabla $tabla si jalo amonos <br> ";
                echo"El script utilizado fue $consulta<br> <br>";
            }else{
                echo"la tabla $tabla ya fue tilin Llama ";
            }
            echo"<br><br>";
              mysqli_close($conexion);
        
    ?>

   
</body>
</html>