<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('category_id');
            $table->string('name');
            $table->string('imager');
            $table->integer('price');
            $table->string('old')->nulllable();
            $table->string('height')->nulllable();
            $table->string('width')->nulllable();
            $table->string('charac',300)->nulllable();
            $table->string('general',300)->nulllable();
            $table->text('content')->nulllable();
            $table->string('quantity');
            $table->string('views')->default(1);
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
        Schema::dropIfExists('products');
    }
}
