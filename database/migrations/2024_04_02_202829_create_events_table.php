<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("nom_event")->nullable();
            $table->string("date_debut_inscript")->nullable();
            $table->string("date_fin_inscript")->nullable();
            $table->string("date_debut_choix")->nullable();
            $table->string("date_fin_choix")->nullable();
            $table->string("etat_choix")->nullable();
            $table->string("etat_inscript")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
