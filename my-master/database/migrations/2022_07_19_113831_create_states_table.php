<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('building_company');
            $table->string('description');
            $table->string('city');
            $table->string('garage');
            $table->string('year');
            $table->bigInteger('agency_id')->nullable(true)->unsigned();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->bigInteger('category_id')->nullable(false)->unsigned()->default('0');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('location');
            $table->string('address1');
            $table->string('address2');
            $table->string('space');
            $table->string('status');
            $table->string('category');
            $table->string('rooms_num');
            $table->string('bathrooms');
            $table->string('price');
            $table->string('neighbourhood');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->string('state')->default('0');
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
        Schema::dropIfExists('states');
    }
}
