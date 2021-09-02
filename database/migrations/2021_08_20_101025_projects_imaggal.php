<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectsImaggal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('img_gal5')->nullable();
            $table->text('img_gal6')->nullable();
            $table->text('img_gal7')->nullable();
            $table->text('img_gal8')->nullable();
            $table->text('img_gal9')->nullable();
            $table->text('img_gal10')->nullable();
            $table->text('img_gal11')->nullable();
            $table->text('img_gal12')->nullable();
            $table->text('img_gal13')->nullable();
            $table->text('img_gal14')->nullable();
            $table->text('img_gal15')->nullable();
            $table->text('img_gal16')->nullable();
            $table->text('img_gal17')->nullable();
            $table->text('img_gal18')->nullable();
            $table->text('img_gal19')->nullable();
            $table->text('img_gal20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
