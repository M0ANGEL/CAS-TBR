<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

/* class Coche{} */

    /* forma de crear un constrtor */
/* 
    public function __construct(
        public int $ruedas=4,
        public string $color="",
        public int $motor=1600,
    )
    {} */


    include("vehiculoConstrutor.php");

    $ferari=new Coche();

    $mio=new Camion(); 

    /* aqui estoy mirando las ruedas que iene la clase  */
    echo "El ferrari tiene " . $ferari->ruedas . " ruedas <br>";
    echo "El mio tiene " . $mio->ruedas . " ruedas <br>";
    $mio->arrancar();
   

?>
</body>
</html>