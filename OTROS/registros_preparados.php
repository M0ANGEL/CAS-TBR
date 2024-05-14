
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
    
        $servint=$_GET["servinte"];
        $codigo=$_GET["codigo"];
        $medicamento=$_GET["medicamento"];
        $cantidad=$_GET["cantidad"];
        
       require("credenciales_BD.php");

        $conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
        //$consulta="select * from medica where codigo like'%$busqueda%'";
       

        mysqli_set_charset($conexion, "utf8");

        //(1)
        $sql="insert into  medica (doc_servinte,codigo,medicamento,cantidad) values (?,?,?,?) ";

        //(2)
        $resultado=mysqli_prepare($conexion,$sql);

        //(3)
        $ok=mysqli_stmt_bind_param($resultado,"sssi", $servint, $codigo,$medicamento,$cantidad);
        /* en la (sssi) eso es por la cantidad de campos y cada campo una letra representa su tipo, la s=string 
        la i=intergue */

        //(4)
        $ok=mysqli_stmt_execute($resultado);

        if($ok==false){
            echo "errror al ejecutar la consulta";
        }else{

            echo "articulos agregado a la base de datos: <br><br>";

           
            //para cerrar el objeto 
            mysqli_stmt_close($resultado);

        }




