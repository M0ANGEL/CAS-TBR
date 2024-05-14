<?PHP 

/* clase carro */
class Coche{  /* por estar en rencia es clase padre */

    /* forma de crear un constrtor */

    public function __construct(
        public int $ruedas=4,
        public string $color="",
        public int $motor=1600,
    )
    {}



    function arrancar(){
        echo "Estoy arrancando <br>";
    }

    function frenar(){
        echo "Estoy frenando";


    }

    function girar(){
        echo "Estoy girando";

    }

    function establece_color($color_coche,$nombre_coche){
        $this->color=$color_coche;

        echo "El color del coche " . $nombre_coche . " es: " . $this->color . "<br>";
    }


}
//------------------------------------------------------------------------------------------------
/* clase camion */

class Camion extends Coche{  /* por eredar la clase coche es clase hijo */
    /* extends se usa para heredar variables de otra clase */

    /* forma de crear un constrtor */

    public function __construct(
        public int $ruedas=8,
        public string $color="azul",
        public int $motor=3600,
    )
    {}   
        /* la herencia hereda todo, pero queremos sobre escribir estos datos, lo escribimos manual
        modificamos datos */
    function establece_color($color_camion,$nombre_camion){ 
        $this->color=$color_camion;

        echo "El color del camion " . $nombre_camion . " es: " . $this->color . "<br>";
    }

    function arrancar()
    {
        parent::arrancar();    /* para cambiar codigo de la clase padre pèro sin sobre escribir */
        echo "Camion arrancado";
    }

}






?>