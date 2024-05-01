<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
</head>

<body>

<?php
    //pasos para conectar con base de datos
        //forma con procedieminto
    
        
        
        
        $db_host = "localhost";      //1  
        $db_usuario = "root";        //2 
        $db_contra = "";             //3
        $db_nombre = "pruebas";     //4 

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
        //$consulta="select * from medica where codigo like'%$busqueda%'";


        //el mysqli_real_escape_string(conexio, string_$get["nombre]) permite que no tenga en cuenta carateres extraños
        //va con la conexion de la base de datos y luego el string 

        $usua=mysqli_real_escape_string($conexion,$_GET["usuario"]);
        $contra=mysqli_real_escape_string($conexion,$_GET["contra"]);

        //------------------MOSTRAR

       /*  $usua=$_GET["usuario"];
        $contra=$_GET["contra"]; */
        

        $consulta="select * from login where usuario = '$usua' and contra ='$contra'";

        //se puede hacer una inyesion para ver datos de mas, se pone (' or '1'='1)
        //esto hace que se bugue y muestre todo en paginas que no estan protegidas
        
        $resultado=mysqli_query($conexion,$consulta);

        while($fila=mysqli_fetch_row($resultado)){

            echo "bienvenido $usua <br><br> estos son tus datos: <br>";

            echo"<table><tr><td>";

            echo $fila[0] . "</td><td>";
            echo $fila[1] . "</td><td>";
            echo $fila[2] . "</td><td></tr></table>";
          
            echo "<br>";

        }

        mysqli_close($conexion); //cerrar cpnexion para qu no consuma recursos
        
    ?>