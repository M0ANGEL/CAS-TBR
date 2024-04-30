<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    //pasos para conectar con base de datos
        //forma con procedieminto
    
        function ejecuta_consulta($labusqueda){

        
        $db_host = "localhost";      //1  
        $db_usuario = "root";        //2 
        $db_contra = "";             //3
        $db_nombre = "pruebas";     //4 

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
        $consulta="select medicamento from medica where medicamento like'%$labusqueda%'";
        $resultado=mysqli_query($conexion,$consulta);

        while($fila=mysqli_fetch_row($resultado)){

            

            for($i=0;$i<count($fila);$i++){
                
                echo $fila[$i] . "<br>";
            }

        }

        mysqli_close($conexion); //cerrar cpnexion para qu no consuma recursos
        }
    ?>
</head>

<body>

    <?php

        //para hacer la busqueda en el mismo formulario para no cambio de pagina
        $mibusqueda=$_GET["buscar"];

        //este codigo hace que la pagina se envie a si misma el parametro
        $mipag=$_SERVER["PHP_SELF"];


        //esta parte como no hay un valor a ejecutar la pagina ejeculta el else
        //al recargar la pagina ya la variable $mibusqueda tiene un valor
        //el cual ejejcuta la function que esta arriba del todo y realiza la busqueda
        if($mibusqueda!=null){

            ejecuta_consulta($mibusqueda);

        }else{

            //formulario
            //espera que se le de un valor y de en enviar
            //al enviar se recarga la pagina

            echo ("<form action='" . $mipag . "' method='get'>
            <label>Buscar: <input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='enviar'>
            </form>");

        }


    ?>
    
</body>
</html>