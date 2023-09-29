<?php

    class Cursos_model{

        private $db;
        private $cursos;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->cursos = array();
        }

        public function get_cursos(){
            $sql = "SELECT * FROM cursos";
            $consulta = $this->db->query($sql);

            while($fila = $consulta->fetch_assoc()){
                $this->cursos[] = $fila;
            }

            return $this->cursos;
        }

    }

?>