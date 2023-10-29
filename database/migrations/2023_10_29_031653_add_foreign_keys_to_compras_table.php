<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compras', function (Blueprint $table) {
            $table->foreign(['id_usuario'], 'compras_ibfk_1')->references(['id'])->on('users');
            $table->foreign(['id_curso'], 'compras_ibfk_2')->references(['id'])->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compras', function (Blueprint $table) {
            $table->dropForeign('compras_ibfk_1');
            $table->dropForeign('compras_ibfk_2');
        });
    }
};
