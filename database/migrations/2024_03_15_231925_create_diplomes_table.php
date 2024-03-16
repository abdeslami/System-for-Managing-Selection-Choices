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
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('mention_diplome')->nullable();
            $table->string('Etablissement')->nullable();
            $table->string('scan_bac')->nullable();
            $table->string('date_bac')->nullable();
            $table->string('scan_diplome')->nullable();
            $table->string('type_diplome')->nullable();
            $table->string('moyenne_s1')->nullable();
            $table->string('moyenne_s2')->nullable();
            $table->string('moyenne_s3')->nullable();
            $table->string('moyenne_s4')->nullable();
            $table->string('moyenne_s5')->nullable();
            $table->string('moyenne_s6')->nullable();
            $table->string('moyenne_s7')->nullable();
            $table->string('moyenne_s8')->nullable();
            $table->string('moyenne_s9')->nullable();
            $table->string('moyenne_s10')->nullable();
            $table->string('releve_s1')->nullable();
            $table->string('releve_s2')->nullable();
            $table->string('releve_s3')->nullable();
            $table->string('releve_s4')->nullable();
            $table->string('releve_s5')->nullable();
            $table->string('releve_s6')->nullable();
            $table->string('releve_s7')->nullable();
            $table->string('releve_s8')->nullable();
            $table->string('releve_s9')->nullable();
            $table->string('releve_s10')->nullable();
            $table->string('diplome_supp1')->nullable();
            $table->string('diplome_supp2')->nullable();
            $table->string('diplome_supp3')->nullable();
            $table->string('diplome_supp4')->nullable();
            $table->string('nom_ds1')->nullable();
            $table->string('nom_ds2')->nullable();
            $table->string('nom_ds3')->nullable();
            $table->string('nom_ds4')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomes');
    }
};
