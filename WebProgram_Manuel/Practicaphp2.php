<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2 php</title>
</head>
<body>
    
    <?php

Function mensaje(){
    echo "<br>";
    echo "Hola mundo";
    }
    mensaje(); //mandamos a llamar a la funcion
    
    $a=10;  //variable global
    
    function variables () {
    $b=15; //variable local
    echo "Prueba de la impresion <br>";
    echo "La variable a es $a <br>";
    echo "la variable b es $b <br>";
    }
    
    Variables();
    echo "Prueba de impresion de variable fuera";
    echo "La variable a es $a <br>";
    echo "la variable b es $b <br>";
    
    

     $var="odio php"; // variable global 
    function variabless (){
        $var2="no soporte"; //variable local
        echo " Ya no aguanto profa  ";
      //  echo"La variable de a es $a <br>";
        echo "La variable de b es $var2 <br>";
    }

    variabless();
    echo"Profa mori cunado dijo php";
    echo" *suena los malaventurados no lloran de fondo* $var <br>"; 

   // echo"la variable b es $b <br>"; 
    
   /*  Operadores 
   suma +
   resta -
   multipliacion *
   division /
   modulo %
   incrememnto ++
   drecemento --

   Condicionales 
   == igual
   === identico
   <> distinto
   != distinto
   !== no identico 
   > mayor que 
   < menor que 
   >= mayor igual 
   <= menor igual

   asignacion 
   = requiere valor de la derecha 
   += suma
   -= resta
   *= muktiplicacion
   /= division 
   %= modulo

   && and 
   || or
   ! not

   . concatenacion
   .= asignar concatenacion
   */

    
    ?>


</body>
</html>