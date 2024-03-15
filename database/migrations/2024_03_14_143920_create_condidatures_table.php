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
        Schema::create('condidatures', function (Blueprint $table) {
            $table->id('id_condidat');
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
            $table->unsignedBigInteger('id_users')->nullable(); 
            $table->string('etat')->nullable();
            $table->timestamps();
            $table->foreign('id_users')->references('id_users')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condidatures');
    }
};
