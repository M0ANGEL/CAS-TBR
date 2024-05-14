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

        $co=$_GET["codgio"];
        $me=$_GET["medicamento"];
        $gr=$_GET["grupo"];

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
        $consulta="insert into medica (codigo,medicamento,grupo) values ('$co','$me','$gr')";
        $resultado=mysqli_query($conexion,$consulta);

       
        
    ?>
</body>
</html>