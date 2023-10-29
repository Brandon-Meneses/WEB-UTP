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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_compra`(
    IN id_usuario BIGINT(20) UNSIGNED,
    IN id_curso INT
)
BEGIN
    INSERT INTO compras (id_usuario, id_curso) VALUES (id_usuario, id_curso);
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS agregar_compra");
    }
};
