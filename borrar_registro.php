<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>borrar registros</title>
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
           

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
            $consulta="delete from medica where codigo='$co'";//consulta de eliminar registro de la base
            $resultado=mysqli_query($conexion,$consulta);
            
            if($resultado==false){

                echo "Error en la consulta";

            }else{

                /* echo "REGISTRO ELIMINADO <br> ";
                echo "---------------------------------<br><br>";
                echo "eliminado: " . mysqli_affected_rows($conexion); */
                if(mysqli_affected_rows($conexion)==0){ //esta funcion dice la cantidad de filas afectadas

                    echo "no hay registros a eliminar";
                }else{

                    echo "cantidad de registro eliminado: " . mysqli_affected_rows($conexion);
                    
                }

            }




        mysqli_close($conexion);

    ?>




</body>
</html>