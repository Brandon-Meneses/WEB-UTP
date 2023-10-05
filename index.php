<?php

    require_once "php/config/database.php";
    require_once "php/controllers/Cursos.php";

    $control = new CursosController();
    $control->cursos();
    
?>