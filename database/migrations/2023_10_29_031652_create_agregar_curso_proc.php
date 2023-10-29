<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_curso`(
    IN nombre_curso VARCHAR(255),
    IN descripcion TEXT,
    IN categoria VARCHAR(15),
    IN precio DECIMAL(10, 2),
    IN url_imagen VARCHAR(255)
)
BEGIN
    INSERT INTO cursos (nombre, descripcion, categoria, precio, url_imagen) VALUES (nombre_curso, descripcion, categoria, precio, url_imagen);
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS agregar_curso");
    }
};
