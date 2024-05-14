
    

    <?php 
        //(1)crear sentencia
        //(2)preparar consulta mysqli_prepare()
        //(3)unir los parametros mysqli_stmt_bind_parem()
        //(4) ejecutar la consulta  mysqli_stmt_execute
        //(5)asociar valores al resultado mysqli_stmt_bind_result()
        //(6)lectura de valores mysqli_stmt_fecth()


        //nos sirve para evitar eyesion y mejorar la rapides

        
        //pasos para conectar con base de datos
        //llamamos las credenciales por el require
    
        $doc_servinte=$_GET["codigo"];
        
       require("credenciales_BD.php");

        $conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
        //$consulta="select * from medica where codigo like'%$busqueda%'";
       

        mysqli_set_charset($conexion, "utf8");

        //(1)
        $sql="select codigo, medicamento, remision,  elaboro from medica where doc_servinte=?";

        //(2)
        $resultado=mysqli_prepare($conexion,$sql);

        //(3)
        $ok=mysqli_stmt_bind_param($resultado,"s", $doc_servinte);

        //(4)
        $ok=mysqli_stmt_execute($resultado);

        if($ok==false){
            echo "errror al ejecutar la consulta";
        }else{

            //(5)
            $ok = mysqli_stmt_bind_result($resultado,$codigo1 ,$medicamento1,$remision1,  $elaboro1);

            //(6)
            echo "articulos encontrados: <br><br>";

            while(mysqli_stmt_fetch($resultado)){

                echo  $codigo1 . " " . $medicamento1 . " " . $remision1 .  " " . $elaboro1 . " <br>" ;
                


            }
            
            //para cerrar el objeto 
            mysqli_stmt_close($resultado);

        }















       
    







    ?>


