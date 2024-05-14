<!-- operadores que se usas
&&: y logico
and: y logico
||: o logico
or: o logico
xor: o exclusivo
!: negacion -->



<?php

    $var1=true;
    $var2=false;

    $resultado=$var1 && $var2;
    
    if($resultado==true){
        echo "correcto";
    }else{
        echo "incorrecto";
    }


?>