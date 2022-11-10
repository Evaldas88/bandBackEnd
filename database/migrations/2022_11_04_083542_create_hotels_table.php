<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_title', 30);
            $table->integer('distance');
            $table->integer('days');
            $table->float('price');
            $table->string('image');
            $table->bigInteger('country_id')->nullable()->unsigned();
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
