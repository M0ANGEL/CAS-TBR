<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar datos</h1>

    <?php  

        include("conexion.php");

        $id=$_GET["id"];
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];
        $cedula=$_GET["cedula"];


    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <table>
       
       <tr>
            <td></td>
            <td><label for="id" ></label>
            <input type="hidden" name="id" value=""></td>
            
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
            <td colspan="2"><input type="submit" value="Actualizar"></td>
        </tr>
        
        

    </table>

    </form>
</body>
</html>