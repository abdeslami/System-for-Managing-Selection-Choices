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
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('cin');
            $table->string('scan_cin');
            $table->string('cne_cme');
            $table->string('date_naissance');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('ville_natale');
            $table->string('num_tel');
            $table->string('photo_personnel');
            $table->string('merite');
            $table->string('annee_universitaire');
            $table->unsignedBigInteger('id_users'); 
            $table->string('etat');
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
