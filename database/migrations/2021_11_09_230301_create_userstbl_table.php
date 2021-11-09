<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserstblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('contrasena',50);
            $table->unsignedInteger('id_positions');
            $table->foreign('id_positions')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userstbl');
    }
}
