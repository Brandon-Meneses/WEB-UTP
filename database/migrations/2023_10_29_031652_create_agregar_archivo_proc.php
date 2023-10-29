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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_archivo`(
    IN id_curso INT,
    IN nombre_archivo VARCHAR(255),
    IN url_archivo VARCHAR(255)
)
BEGIN
    INSERT INTO links_archivos (id_curso, nombre, url_archivo) VALUES (id_curso, nombre_archivo, url_archivo);
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS agregar_archivo");
    }
};
