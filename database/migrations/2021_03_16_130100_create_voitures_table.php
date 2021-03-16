<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('categorie_id');
            $table->string('nom');
            $table->string('type');
            $table->unsignedInteger('vitesse');
            $table->unsignedInteger('place');
            $table->string('image');
            $table->unsignedInteger('annee');
            $table->string('moteur');
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
        Schema::dropIfExists('voitures');
    }
}
