<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('nombre_place');
            $table->date('date_reservation');
            $table->foreignId('user_id');
            $table->foreignId('groupe_id');
            $table->foreignId('paiement_id');
            $table->foreignId('billet_id')->constrained();
            $table->foreignId('invite_id')->constrained();
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
        Schema::dropIfExists('reservations');
    }
}
