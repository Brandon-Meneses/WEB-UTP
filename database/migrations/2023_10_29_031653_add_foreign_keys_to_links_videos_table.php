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
        Schema::table('links_videos', function (Blueprint $table) {
            $table->foreign(['id_curso'], 'links_videos_ibfk_1')->references(['id'])->on('cursos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('links_videos', function (Blueprint $table) {
            $table->dropForeign('links_videos_ibfk_1');
        });
    }
};
