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
    
        
        $busqueda=$_GET["buscar"];
        
        $db_host = "localhost";      //1  
        $db_usuario = "root";        //2 
        $db_contra = "";             //3
        $db_nombre = "pruebas";     //4 

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
        //$consulta="select * from medica where codigo like'%$busqueda%'";
        $consulta="select * from medica where codigo ='$busqueda'";
        echo "$consulta<br><br>";
        $resultado=mysqli_query($conexion,$consulta);

        while($fila=mysqli_fetch_row($resultado)){

            echo "<form action='actualizar.php' mthod='get'>";

            echo "<input type='text' name='codigo' value='" . $fila[0] . "'><br>";
            echo "<input type='text' name='grupo' value='" . $fila[2] . "'><br>";
            echo "<input type ='submit' name='enviando' value='actualizar'>";
            echo "</form>";
        
          

        }

        mysqli_close($conexion); //cerrar cpnexion para qu no consuma recursos
        
    ?>
    


    
    
</body>
</html>