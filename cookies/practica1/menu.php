<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        table{
            text-align: center;
            width: 25%;
            border: 0;
            
        }

        h1{
            text-align: center;
        }

        p{
            font-size: 1.5em;
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_COOKIE["idioma_seleccionado"])){

            if($_COOKIE["idioma_seleccionado"]=="es"){
                header("location: pagina_es.php");
    
            }else if($_COOKIE["idioma_seleccionado"]=="in"){
                header("location: pagina_ing.php");
            }
        }


    ?>
    

<table>
    <tr>
        <td colspan="2" align="center"><h1>Elige idioma</h1></td>
    </tr>
    <tr>
        <td align="center"><a href="creaCookie.php?idioma=es"><img src="imagenes/colombia.jpeg" width="90" height="60" alt=""></a></td>
    </tr>
    <tr>
        <td align="center"><a href="creaCookie.php?idioma=in"><img src="imagenes/eeuu.jpeg" width="90" height="60" alt=""></a></td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>





</body>
</html>