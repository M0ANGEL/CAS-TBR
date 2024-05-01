<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
        //(1)crear sentencia
        //(2)preparar consulta mysqli_prepare()
        //(3)unir los parametros mysqli_stmt_bind_parem()
        //(4) ejecutar la consulta  mysqli_stmt_execute
        //(5)asociar valores al resultado mysqli_stmt_bind_result()
        //(6)lectura de valores mysqli_stmt_fecth()


        //nos sirve para evitar eyesion y mejorar la rapides

        
        //pasos para conectar con base de datos
        //forma con procedieminto
    
        
        
        
        $db_host = "localhost";      //1  
        $db_usuario = "root";        //2 
        $db_contra = "";             //3
        $db_nombre = "pruebas";     //4 

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
        //$consulta="select * from medica where codigo like'%$busqueda%'";


        //(1)
        $sql="select medicamento, codigo from medica where codigo=?";
        //(2)
        $resultado=mysqli_prepare($conexion,$sql);
        //(3)
        $si_no=mysqli_stmt_bind_param($resultado,"s", $codigo);
        //(4)
        $si_no=mysqli_stmt_execute($resultado);

        if($si_no==false){
            echo "errror al ejecutar la consulta";
        }else{
            //(5)
            $si_no = mysqli_stmt_bind_result($resultado,$medicamento1,$codigo1);
            //(6)
            echo "articulos encontrados: <br>";
            while(mysqli_stmt_fetch($resultado)){

                echo  $medicamento1 . " " . $codigo1 . " <br>" ;
                


            }
            
            //para cerrar el objeto 
            mysqli_stmt_close($resultado);

        }
        













        //el mysqli_real_escape_string(conexio, string_$get["nombre]) permite que no tenga en cuenta carateres extraños
        //va con la conexion de la base de datos y luego el string 

        $codigo=mysqli_real_escape_string($conexion,$_GET["codigo"]);
       

        $consulta="select medicamento, codigo from medica where codigo = '$codigo'";

        //se puede hacer una inyesion para ver datos de mas, se pone (' or '1'='1)
        //esto hace que se bugue y muestre todo en paginas que no estan protegidas
        
        
        
    







    ?>



</body>
</html>