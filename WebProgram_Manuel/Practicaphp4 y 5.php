<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicaphp 4 y 5</title>
</head>
<body>
    
       
    <?php
     //Practica 4
     echo "<h2> Ciclo if else </h2>";
    $numero = 7 ; 
    // verificar si el numeor es par o inpar 
    if ($numero % 2 == 0 ){
        echo "El numero $numero es par." ;
    } else {
        echo "El numero $numero es inpar.";
    }
      // Practica 5 
      echo "<h2> Ciclo con switch </h2>";
    $day ="Wednesday";
    switch ($day){
        case "Monday" :
        echo " <br> Today is Monday";
        break;
        case "Tuesday":
        echo " <br> Today is Monday";
        break;    
        case "Wednesday":
        echo " <br> Today is Wednesday";
        break;  
        case "Thursday":
        echo " <br> Today is Thursday";
        break;        
        case "Friday":
        echo " <br> Today is Friday";
        break;
        case "Saturday":
        echo " <br> Today is Saturday";
        break;
        case "Sunday":
        echo " <br> Today is Sunday";
        break;
        default:
    }

    ?>

</body>
</html>