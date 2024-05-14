<?php

    require("config.php");

    class conexion{

        protected $conexion_db;
        public function __construct(){

            $this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);

            if($this->conexion_db->connect_errno){
                echo "error al conectar base de datos: " . $this->conexion_db->connect_errno;
                return;
            }

            
        }
        




    }


























?>