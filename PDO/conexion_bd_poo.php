<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 
    $conexion = new mysqli("localhost", "root", "","pruebas");

    if($conexion->connect_errno){

        echo "fallo la conexion " . $conexion->connect_errno;

    }else{
        echo "conectado";
    }

    $conexion->set_charset("utf8");

    $sql="select * from medica";

    $resultado=$conexion->query($sql);

    if($conexion->errno){

        die($conexion->error);

    }

    while($fila=$resultado->fetch_array()){
        /* fetch_assoc es para escribir el nombre del campo 
            fetch_array para escribir la posicion del campo con numeros*/

         echo "<table><tr><td>";

        echo $fila ['doc_servinte'] . "</td><td> ";
        echo $fila ['codigo'] . "</td><td> ";
        echo $fila ['medicamento'] . "</td><td> ";
        echo $fila ['cantidad'] . "</td><td> ";
        echo $fila ['remision'] . "</td><td> ";
        echo $fila ['fecha'] . "</td><td> ";
        echo $fila ['entrega'] . "</td><td> ";
        echo $fila ['bodega'] . "</td><td> ";
        echo $fila ['elaboro'] . "</td><td></tr></table> "; 

      


        

    }








?>
</body>
</html>