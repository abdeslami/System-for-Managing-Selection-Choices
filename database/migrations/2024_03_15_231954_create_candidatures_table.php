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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('sexe')->nullable();
            $table->string('cin')->nullable();
            $table->string('scan_cin')->nullable();
            $table->string('cne_cme')->nullable();
            $table->string('date_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville_natale')->nullable();
            $table->string('num_tel')->nullable();
            $table->string('photo_personnel')->nullable();
            $table->string('merite')->nullable();
            $table->string('annee_universitaire')->nullable();
            $table->string('etat')->nullable();
            $table->foreignId("choix_classement_id")->constrained(); 
            $table->foreignId("user_id")->constrained(); 
            $table->foreignId("diplome_id")->constrained(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
