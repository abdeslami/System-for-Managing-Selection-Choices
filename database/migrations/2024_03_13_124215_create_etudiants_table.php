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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_user")->unique();
            $table->foreignId("id_choix_classement")->unique();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->char('sexe', 5);
            $table->string('cin', 20);
            $table->string('cne_cme', 20);
            $table->date('date_de_naissance');
            $table->string('nationalite', 100);
            $table->string('adresse', 255);
            $table->string('ville_natale', 100);
            $table->string('num_tel', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
