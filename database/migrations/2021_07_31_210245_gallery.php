<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->text('img_gal1')->nullable();
            $table->text('img_gal2')->nullable();
            $table->text('img_gal3')->nullable();
            $table->text('img_gal4')->nullable();
            $table->text('img_gal5')->nullable();
            $table->text('img_gal6')->nullable();
            $table->text('img_gal7')->nullable();
            $table->text('img_gal8')->nullable();
            $table->text('img_gal9')->nullable();
            $table->text('img_gal10')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
