<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->integer('popularity')->nullable();
            $table->integer('price');
            $table->integer('ratings')->nullable();
            $table->boolean('is_New')->nullable();
            $table->boolean('is_Discount')->nullable();
            $table->integer('Discount')->nullable();
            $table->bigInteger('sub_subcategory_id')->unsigned()->nullable();
            $table->foreign('sub_subcategory_id')->references('id')->on('sub_sub_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }

}
