<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar registros</title>
</head>
<body>
    

    <?php
        //pasos para conectar con base de datos
            //forma con procedieminto
    
            $db_host = "localhost";      //1  
            $db_usuario = "root";        //2 
            $db_contra = "";             //3
            $db_nombre = "pruebas";     //4 

            $co=$_GET["codigo"];
            $gr=$_GET["grupo"];
           

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
            $consulta="update medica set grupo='$gr' where codigo='$co'";//consulta de eliminar registro de la base

            //SI QUIERO ACTUALIZAR DOS O MAS CAMPOS A LA VEZ
            /* $consulta="update medica set grupo='$gr', medicamento='$me'  where codigo='$co'" */
            $resultado=mysqli_query($conexion,$consulta);

            echo "Registro actualizado";
            
           




        mysqli_close($conexion);

    ?>




</body>
</html>