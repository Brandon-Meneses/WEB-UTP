<?php

    class CursosController{
            
        public function cursos(){
            require_once "../../models/CursosModel.php";
            $cursos = new Cursos_model();
            return $cursos->get_cursos();
        }

    }

?>