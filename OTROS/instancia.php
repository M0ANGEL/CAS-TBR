<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    include("vihiculo.php");

    $ferari=new Coche();

    $mio=new Camion(); 

    /* aqui estoy mirando las ruedas que iene la clase  */
    echo "El ferrari tiene " . $ferari->ruedas . " ruedas <br>";
    echo "El mio tiene " . $mio->ruedas . " ruedas <br>";
    

    

    
    




?>
</body>
</html>