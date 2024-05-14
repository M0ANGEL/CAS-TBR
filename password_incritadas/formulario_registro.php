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
    <form name="form1" method="post" action="insertar_registro.php">
        <table border="0" align="center">
            <tr>
                <td>USUARIO</td>
                <td><label for="usuario"></label>
                <input type="text" name="usuario" id="usuario"></td>
            </tr>

            <tr>
                <td>CONTRASEÑA</td>
                <td><label for="contra"></label>
                <input type="password" name="contra" id="contra"></td>
            </tr>
         
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>

            <tr>  
                
                <td align="center"><input type="submit" name="enviar" id="enviar" value="registrar"></td>
            </tr>
        </table>
    </form>







</body>
</html>