<?php

    require("conexion.php");

    class DevueleProductos extends conexion{

        public function __construct(){

            parent::__construct();

        }

        public function get_productos(){

            $resultado=$this->$conexion_db->query('select * from medica');
            $productos=$resultado->fetch_all(mysql_assoc);


        }
        
            
       


    }


    















?>