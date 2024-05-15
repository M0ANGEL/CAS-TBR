<?php 


try{

    $base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");



}catch(Exception $e){

    die ('Error: ' . $e->getMessage());
    echo "Error en la linea: " . $e->getLine();
    echo "Error en base numero: " . $e->getCode();



}

























?>