<?php

    class CursosController{
            
        public function cursos(){
            require_once "php/models/CursosModel.php";
            $cursos = new Cursos_model();

            $data["titulo"] = "Cursos";
            $data["cursos"] = $cursos->get_cursos();

            require_once "php/views/cursos/cursos.php";

        }

    }

?>