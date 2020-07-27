<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('nombre_adulte');
            $table->unsignedTinyInteger('nombre_enfant');
            $table->date('date_creation');
            $table->integer('prix_personne');
            $table->string('reduction');
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
        Schema::dropIfExists('groupes');
    }
}
