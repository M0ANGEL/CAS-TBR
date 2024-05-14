<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    try{
        //conexion a base de datos
        $base = new PDO("mysql:host=localhost; dbname=pruebas","root","");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //consulta sql
        $sql="select * from usuario_pass where usuarios=:login and password=:pas";

        //preparacio de la consulta
        $resultado=$base->prepare($sql);

        //se recibe lo que vienne del formulario
        $usuario=htmlentities(addslashes($_POST["login"]));
        $contra=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login", $usuario);
        $resultado->bindValue(":pas",$contra);


        //se ejcuta la consulta
        $resultado->execute();


        //aqui si hay registros el rowcount tendra un valor 1 y si no 0
        $numero_registro=$resultado->rowCount();

        if($numero_registro!=0){

            //la variable session si esta registrado crea una sesion
            //y guarda los datos
            
            session_start();

            $_SESSION["usuario"]=$_POST["login"];

            header("location: usuario_registrados.php");

        }else{
            //para redirigir el usuario a la pagina de login si no existe en labase de datos
            header("location: login.php");

        }

        







    }catch(Exception $e){

        die("Error : " . $e->getMessage());





    }

















?>
    
</body>
</html>