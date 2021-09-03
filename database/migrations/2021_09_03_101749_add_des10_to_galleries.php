<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDes10ToGalleries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->text('des_img_gal1')->nullable();
            $table->text('des_img_gal2')->nullable();
            $table->text('des_img_gal3')->nullable();
            $table->text('des_img_gal4')->nullable();
            $table->text('des_img_gal5')->nullable();
            $table->text('des_img_gal6')->nullable();
            $table->text('des_img_gal7')->nullable();
            $table->text('des_img_gal8')->nullable();
            $table->text('des_img_gal9')->nullable();
            $table->text('des_img_gal10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            //
        });
    }
}
