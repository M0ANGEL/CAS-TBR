<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    
    //indexados

    //como se hacia antes para almacenar en una variable los vaores de un array

    /* $datos=[1,2,3];
    $a=$datos[0];
    $b=$datos[1];
    $c=$datos[2];

    echo $a . "<br>";
    echo $b . "<br>";
    echo $a. "<br>"; */

    //como se hace actual
    $datos=[1,2,3]; //array
    [$a,$b,$c]=$datos;

    echo $a . "<br>";
    echo $b . "<br>";
    echo $a. "<br>";


    //ejemplo algo que devuelva coordenadas de un punto
    function getCoordenadas(){

        return [12.34, 56.78];


    }

    [$lat, $longitud]=getCoordenadas();

    //desestructuramos el array de manera simople

    echo $lat . "<br>";
    echo $longitud . "<br>";


    //------------------------------------------------------------------------------------------------
    //asociativos

    $personas=[
        "nombre"=>"miguel",
        "edad"=>21,
        "ciudad"=>"cali",



    ];

    ["nombre"=>$elNOmbre, "edad"=>$laEdad, "ciudad"=>$laCiudad]=$personas;

    echo "nombre: " . $elNOmbre . "<br>";
    echo "edad: " . $laEdad . "<br>";
    echo "ciudad: " . $laCiudad . "<br>";
















?>
    
</body>
</html>