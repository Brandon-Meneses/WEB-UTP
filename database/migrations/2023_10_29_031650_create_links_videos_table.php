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
        Schema::create('links_videos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_curso')->nullable()->index('id_curso');
            $table->string('nombre');
            $table->string('url_video');
            $table->integer('orden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links_videos');
    }
};
