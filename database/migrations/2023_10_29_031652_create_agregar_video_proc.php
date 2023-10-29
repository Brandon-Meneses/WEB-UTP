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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_video`(
    IN id_curso INT,
    IN nombre_video VARCHAR(255),
    IN url_video VARCHAR(255),
    IN orden INT
)
BEGIN
    INSERT INTO links_videos (id_curso, nombre, url_video, orden) VALUES (id_curso, nombre_video, url_video, orden);
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS agregar_video");
    }
};
