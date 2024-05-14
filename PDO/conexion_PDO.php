<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    /* conexion a base de datos por metodo PDO */

    try{

        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root","");
        echo "conexion OK";

    }catch(Exception $e){

        die("Error--: " . $e->getMessage());

    }finally{

        $base=null;

    }














?>    



























</body>
</html>