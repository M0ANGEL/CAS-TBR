<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="estilo.css">


</head>

<body>

<?php 
    include("conexion.php");

    //$sql="select * from datos_usuario";

    //$conexion=$base->query($sql);

    //$registro=$conexion->fetchAll(PDO::FETCH_OBJ);

    //lo mismo de arriba pero en una sola linea de codigo

    $registro=$base->query("select * from datos_usuario")->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["cr"])){

      //aqui estamos guardadon los datos que se INSERTARAN
      
      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];
      $cedula=$_POST["cedula"];

      //aqui se prepara la consulata
      $sql="INSERT INTO datos_usuario (nombre,apellido,cedula) values (:Minombre, :Miapellido, :Micedula)";

      //aqui se almacena en resultado la base que es la consulta y prepare que la prepara con la consulta sql
      $resultado=$base->prepare($sql);

      //aqui en resultado vamos a ek metodo exceute que le ejcuta, en array vamos a dar los valores que estan en los marcadores :etc
      $resultado->execute(array(":Minombre"=>$nombre, ":Miapellido"=>$apellido,":Micedula"=>$cedula ));

      header("location: index.php");
            

        



    }






?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

 
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table width="50%" border="0" align="center"  >
      <tr >
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Cedula</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr> 
    
      <?php 
      
      foreach($registro as $persona):?>
        <!-- un bucle para que se repita las lineas igual que la cantidad e usuarios de
          la basse de datos -->


        <tr> <!-- linea de cogido de registro -->
          <td><?php echo $persona->id ?></td> <!-- dento del td ponemos la etiqueta php para ingresar los registros de la BD -->
          <td ><?php echo $persona->nombre ?></td>
          <td ><?php echo $persona->apellido ?></td>
          <td ><?php echo $persona->cedula ?></td>
    
          <td class="bot"><a href="crud_borrar.php?id=<?php echo $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
          
          
          <td class='bot'><a href="crud_actualizar.php?id=<?php echo $persona->id?> & nombre=<?php echo $persona->nombre?> & apellido=<?php echo $persona->apellido?> & cedula=<?php echo $persona->cedula?>"><input type='button' name='up' id='up' value='Actualizar'></a>
          
        </td>


        </tr> 
        
      <?php endforeach;  ?>  
      <tr>
      <td></td>
      
        <td><input type='text' name='nombre' size='10' class='centrado'></td>
        <td><input type='text' name='apellido' size='10' class='centrado'></td>
        <td><input type='text' name=' cedula' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
    </table>
  </form>
 

<p>&nbsp;</p>
</body>
</html>