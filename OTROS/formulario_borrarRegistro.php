<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 

    h1{
        text-align:center;
        color:#00f;
        border-bottom:dotted #0000ff;
        width:50%;
        margin:auto;

    }

    table{
        border: 1px solid #f00;
        padding:20px 50px;
        margin-top:50px;
    }

    body{
        background-color:#ffc;
    }
    </style>
</head>

<body>
    <h1>Eliminar  medicamentos</h1>
    <form name="form1" method="get" action="borrar_registro.php">
        <table border="0" align="center">
            <!-- para borrar es mejor solo borrar un campo el caul es el id unico 
        que no se repite de la tabla de base de datos -->
            <tr>
                <td>CODIGO</td>
                <td><label for="codigo"></label>
                <input tpe="text" name="codigo" id="codigo"></td>
            </tr>

            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>

            <tr>  
                <td align="center"><input type="reset" name="borrar" id="borrar" value="borrar"></td>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="eliminar"></td>
            </tr>
        </table>
    </form>







</body>
</html>