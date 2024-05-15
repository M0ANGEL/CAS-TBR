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






?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

 
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
          <td><?php echo $persona->ID ?></td> <!-- dento del td ponemos la etiqueta php para ingresar los registros de la BD -->
          <td ><?php echo $persona->nombre ?></td>
          <td ><?php echo $persona->apellido ?></td>
          <td ><?php echo $persona->cedula ?></td>
    
          <td class="bot"><a href="crud_borrar.php?id=<?php echo $persona->ID ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
          
          
          <td class='bot'>
            <a href="crud_actualizar.php?id=<?php echo $persona->ID?>
            & nombre=<?php echo $persona->nombre?>
            & apellido=<?php echo $persona->apellido?>
            & cedula=<?php echo $persona->Cedula?>">
            <input type='button' name='up' id='up' value='Actualizar'></a>
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
 

<p>&nbsp;</p>
</body>
</html>