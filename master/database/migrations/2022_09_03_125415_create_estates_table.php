<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->string('building_company');
            $table->string('description');
            $table->string('city');
            $table->string('garage');
            $table->string('year');
            $table->bigInteger('agency_id')->nullable(false)->unsigned();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->bigInteger('category_id')->nullable(false)->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('location');
            $table->string('address1');
            $table->string('address2');
            $table->string('space');
            $table->string('status');
            $table->string('rooms_num');
            $table->string('bathrooms');
            $table->string('price');
            $table->string('neighbourhood');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->string('state')->default('0');
            $table->string('owner_name')->nullable(true);
            $table->string('oEmail')->nullable(true);
            $table->string('owner_phone')->nullable(true);
            $table->string('oAddress')->nullable(true);
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
        Schema::dropIfExists('estates');
    }
}
