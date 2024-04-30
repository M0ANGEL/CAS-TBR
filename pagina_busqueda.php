<?php

    $busqueda=$_GET["buscar"];





 //pasos para conectar con base de datos
        //forma con procedieminto
    
        $db_host = "localhost";      //1  
        $db_usuario = "root";        //2 
        $db_contra = "";             //3
        $db_nombre = "pruebas";     //4 

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
        $consulta="select * from medica where codigo like'%$busqueda%'";
        $resultado=mysqli_query($conexion,$consulta);
        
        while($fila=mysqli_fetch_row($resultado)){

            echo "<br>";

            for($i=0;$i<count($fila);$i++){
                
                echo $fila[$i] . "     "; 
            }

        }

        mysqli_close($conexion); //cerrar cpnexion para qu no consuma recursos











?>