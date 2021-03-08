<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->id();
            $table->text('features',255)->nullable();//temporal 
            $table->text('amenities',255)->nullable();//temporal
            $table->text('specialf',255)->nullable();//temporal
            $table->text('information',400)->nullable();
            $table->string('rooms',1)->nullable();
            $table->string('bathrooms',1)->nullable();
            $table->string('size',255)->nullable();
            $table->text('details',255)->nullable();//temporal
            $table->foreignId('property_id')->references('id')->on('properties')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('characteristics');
    }
}
