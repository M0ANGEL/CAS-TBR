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
    <h1>Registros de medicamentos</h1>
    <form name="form1" method="get" action="insertar_registro.php">
        <table border="0" align="center">
            <tr>
                <td>CODIGO</td>
                <td><label for="codigo"></label>
                <input tpe="text" name="codigo" id="codigo"></td>
            </tr>

            <tr>
                <td>MEDICAMENTO</td>
                <td><label for="medicamento"></label>
                <input tpe="text" name="medicamento" id="medicamento"></td>
            </tr>
            <tr>
                <td>GRUPO</td>
                <td><label for="grupo"></label>
                <input tpe="text" name="grupo" id="grupo"></td>
            </tr>

            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>

            <tr>  
                <td align="center"><input type="reset" name="borrar" id="borrar" value="borrar"></td>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="enviar"></td>
            </tr>
        </table>
    </form>







</body>
</html>