<?php

    class CursosController{
            
        public function cursos(){
            require_once "php/models/CursosModel.php";
            $cursos = new Cursos_model();

            $data["titulo"] = "Cursos";
            $data["cursos"] = $cursos->get_cursos();

            require_once "utils.php";
            $dirname = $__dirname;

            require_once "$dirname/php/views/usuario/cursos/cursos.php"; // Importo la vista de Cursos

        }

    }

?>