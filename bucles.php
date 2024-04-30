<!-- indeterminados -->
<!-- bucle while -->

<!-- Do while -->

<!-- determinados -->
<!-- bucle for -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$var1=7;

//--------------------------------------------------------------------------------
                                /* while */

while($var1<6){

    /* ejecuta el codigo dentro siempre y cuanto la condicione se cumpla */

    /* echo "tasmos ejecurando el codigo del bucle<br>";
    $var1++; */


}

//echo "terminamos saliendo del bucle";

//--------------------------------------------------------------------------------

                        /* do while */
/* do{
    echo "tasmos ejecurando el codigo del bucle<br>";
    $var1++;

}while($var1<6);
echo "terminamos saliendo del bucle"; */

//-------------------------------------------------------------------------------- 

                       /* bucle for */
for($i=10;$i>=-10;$i--){

    if($i==0){
        echo "el continue es para que se salte esta parte <br>";
        continue;
    }
    echo "9 / $i = " . 9/$i . "<br>";
    

    
}


?>
</body>
</html>