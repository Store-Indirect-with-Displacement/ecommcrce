<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderAttriubus extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      
        Schema::table('orders', function (Blueprint $table) {
          $table->string('order_id');
          $table->string('order_status')->default('pending');
          $table->string('order_distance')->nullable();
          $table->date('order_start_date');
          $table->date('order_EST_DEL_DT')->nullable();
          $table->bigInteger('operator_id')->unsigned();
          $table->foreign('operator_id')->references('id')->on('operators')->onDelete('cascade')->onUpdate('cascade');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
