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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_usuario`(
    IN nombre VARCHAR(255),
    IN correo VARCHAR(255),
    IN contrasena VARCHAR(255)
)
BEGIN
    INSERT INTO users (name, email, password) VALUES (nombre, correo, contrasena);
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS agregar_usuario");
    }
};
