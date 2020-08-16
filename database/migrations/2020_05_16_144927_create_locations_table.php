<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *     public  $fillable=  ['Latitude','Longitude','Flat_No:','Pincode','AddressType','country_id','city_id'];
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->decimal('Latitude',12,2)->nullable();
            $table->decimal('Longitude',12,2)->nullable();
            $table->string('flat_number')->nullable();
            $table->string('AddressType')->nullable();
            $table->bigInteger('country_id')->unsigned()->nullable();
            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->integer('Pincode')->nullable();
            $table->foreign('country_id')->references('id')->on('conutries')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('locations');
    }
}
