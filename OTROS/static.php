<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

//concesionario
class compra_vehiculo {

    private static int $descuento=0; //variable estatica
    public function  __construct(
        private int $precio_base,
        string $gama,
        
    ){
      
        if($gama=="urbano"){

            $this->precio_base+=1000;

        }else if($gama=="compacto"){

            $this->precio_base+=2000;

        }else if($gama=="berlina"){

            $this->precio_base+=3000;
        }

    }

    function climatizador(){
        $this->precio_base+=2000;
    }

    function navegador_gps(){
        $this->precio_base+=2500;
    }

    function tapiceria($color){
        if($color=="negro"){

            $this->precio_base+=1900;

        }else if($color=="rojo"){

            $this->precio_base+=2000;

        }else if($color=="amarillo"){

            $this->precio_base+=3000;
        }
    }


    

    function llantas($calidad){
        if($calidad=="normal"){

            $this->precio_base+=1900;

        }else if($calidad=="plus"){

            $this->precio_base+=2000;

        }else if($calidad=="plusmas"){

            $this->precio_base+=3000;
        }

    }

function precio_final(){
    $valor_final=$this->precio_base-self::$descuento;
    return $valor_final;
}











}









?>

</body>
</html>