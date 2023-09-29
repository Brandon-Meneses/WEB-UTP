<?php

    class Conectar{
        
        public static function conexion(){
            $conexion = new mysqli("localhost", "root", "", "proyecto_web");
            return $conexion;
        }

    }

?>