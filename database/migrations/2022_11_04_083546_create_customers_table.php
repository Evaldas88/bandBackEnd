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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('surname', 64);
            $table->string('email', 100);
            $table->string('phone', 30);
            //$table->bigInteger('hotel_id')->unsigned();
            $table->timestamps();
            $table->foreignId('hotel_id')->nullable()->references('id')->on('hotels')->onDelete('set null');
            // $table->bigInteger('country_id')->nullable()->unsigned();
            // $table->timestamps();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
