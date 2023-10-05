<?php



    require_once "php/config/database.php"; // Importo la configuración de la base de datos
    require_once "php/controllers/Cursos.php"; // Importo el controlador de Cursos

    $control = new CursosController(); // Instancio el controlador de Cursos
    $control->cursos();
    
?>