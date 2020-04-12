<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('blogger_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('date');
            $table->boolean('is_archive')->nullable();
            $table->boolean('is_resent')->nullable();
            $table->timestamps();
            $table->foreign('blogger_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('blogs');
    }

}
