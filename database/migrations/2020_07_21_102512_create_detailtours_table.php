<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtours', function (Blueprint $table) {
            $table->id();
            $table->string('hotel');
            $table->string('apropos');
            $table->integer('prix_adulte');
            $table->integer('prix_enfant');
           
            $table->foreignId('tour_id')->constrained();
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
        Schema::dropIfExists('detailtours');
    }
}
