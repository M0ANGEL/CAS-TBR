<!-- el nombre debe ir siempre en mayuscula
no llevan el simbolo ($) no se puedene redefinir o cambiar su valor, solo pueden guardar numeros escalables
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    

 <?php
    define("NOMBRE", "MIGUEL ANGEL");
    //echo "El autos es: " . NOMBRE ;  //las constantes no se pueden imprimir dentro de string, afuera y separa por el (.)

    echo "la linea de esta intrucion es: " . __LINE__ . "<br>"; //para ver la linea en la que se pone este __LINE__
    echo "estamos trabajando con este fichero: " . __FILE__; //PARA VER EL FICHERO QUE SE ESTA TRABAJANDO

 ?>
 </body>
 </html>