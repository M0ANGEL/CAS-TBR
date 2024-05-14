

  <!-- echo 'Current PHP version: ' . phpversion(); vewr vesrion de php -->

  <?php

    //la conexion de la base de datos esta en otro archivo
    //esto para no repetir mucho codigo, ahi esta el paso a pasao para conectar la BBDD
    
    $server="localhost";
    $user="anegl";
    $pas="miguel";
    $db="pruebas";

    $conexion=mysqli_connect($server, $user, $pas, $db);

    //consulta
    //funcion para ejecutar consulta
    $consulta = "select * from persona";
    
    //donde se almacxena la consulta
    $resultados = mysqli_query($conexion, $consulta);

    

    //-------------------------------------------------------------------

    //para ver los datos linea a linea
    /* $fila = mysqli_fetch_row($resultados);
    echo $fila[0] . " ";
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " ";

    $fila = mysqli_fetch_row($resultados);
    echo $fila[0] . " ";
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo $fila[3] . " "; */
    
    
    //----------------------------------------------------------------------------------------

  /*   $registro=1;
    //para no repetir este cogido se hace un bucle

    //bucle sabiendo cuantos resitros hay

    while($registro<=2){

        $fila = mysqli_fetch_row($resultados);

        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        echo $fila[3] . " ";
        echo "<br>";

        $registro++;
    } */
 
    //--------------------------------------------------------------------------------------------------------
  
    //bucle de forma correcta

    
    while(($fila=mysqli_fetch_row($resultados))==true){

    echo  "----SIGUIENTE USUARIO----- <br>";
      for($i=0;$i<count($fila);$i++){
        echo $fila[$i] . " <br> ";
      }

      
        

      
    }

    //SI LA CONEXION A LA BASE DE DATOS ESTA ABIERTA CONSUME RECURSOS, ES MEJOR CERRAR CADA QUE NO SE VAYA A USAR

    mysqli_close($conexion);

  
       







  ?>

