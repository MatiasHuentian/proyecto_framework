<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 50)->unique;
            $table->string('descripcion',100);
            $table->integer('cantidad');
            $table->integer('precio_venta');
            $table->unsignedInteger('id_categories');
            $table->unsignedInteger('id_offices');
            $table->foreign('id_categories')->references('id')->on('categories');
            $table->foreign('id_offices')->references('id')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
