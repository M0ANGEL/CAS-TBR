<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>

</head>
<body>
    <h1>Actualizar datos</h1>

    <?php  

        include("conexion.php");

        //aqui si no se da en el bodon de actualizar lee este codigo

        if(!isset($_POST["actualizar"])){

            $id=$_GET["id"];
            $nombre=$_GET["nombre"];
            $apellido=$_GET["apellido"];
            $cedula=$_GET["cedula"];

            //cuanddo se pulsa se ejecuta la cosula
        }else{
            //aqui estamos guardadon los datos que se actualizaran
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $cedula=$_POST["cedula"];

            //aqui se prepara la consulata
            $sql="UPDATE datos_usuario set nombre=:Minombre, apellido=:Miapellido, cedula=:Micedula where id=:miid";

            //aqui se almacena en resultado la base que es la consulta y prepare que la prepara con la consulta sql
            $resultado=$base->prepare($sql);

            //aqui en resultado vamos a ek metodo exceute que le ejcuta, en array vamos a dar los valores que estan en los marcadores :etc
            $resultado->execute(array(":miid"=>$id, ":Minombre"=>$nombre, ":Miapellido"=>$apellido,":Micedula"=>$cedula ));

            header("location: index.php");

        }
       


    ?>
    <form name="for1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table width="25%" border="0" align="center">
       
       <tr>
            <td></td>
            <td><label for="id" ></label>
            <input type="hidden" name="id" value="<?php echo $id?>"></td>
            
        </tr> 

        <tr>
            <td>Nombre</td>
            <td><label for="nombre" ></label>
            <input type="text" name="nombre" value="<?php echo $nombre?>"></td>
            
        </tr>

        <tr>
            <td>Apellido</td>
            <td><label for="apellido" ></label>
            <input type="text" name="apellido" value="<?php echo $apellido?>"></td>
            
        </tr>

        <tr>
            <td>Cedula</td>
            <td><label for="cedula" ></label>
            <input type="text" name="cedula" value="<?php echo $cedula?>"></td>
            
        </tr>

        
        <tr>
            <td colspan="2"><input type="submit" name="actualizar" value="actualizar"></td>
        </tr>
        
        

    </table>

    </form>
</body>
</html>