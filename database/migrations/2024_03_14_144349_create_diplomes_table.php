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
            $table->id('id_diplome');
            $table->string('nom');
            $table->string('mention_diplome');
            $table->string('scan_bac');
            $table->string('date_bac');
            $table->string('scan_diplome');
            $table->string('type_diplome');
            $table->string('moyenne_s1');
            $table->string('moyenne_s2');
            $table->string('moyenne_s3');
            $table->string('moyenne_s4');
            $table->string('moyenne_s5');
            $table->string('moyenne_s6');
            $table->string('moyenne_s7');
            $table->string('moyenne_s8');
            $table->string('moyenne_s9');
            $table->string('moyenne_s10');
            $table->string('releve_s1');
            $table->string('releve_s2');
            $table->string('releve_s3');
            $table->string('releve_s4');
            $table->string('releve_s5');
            $table->string('releve_s6');
            $table->string('releve_s7');
            $table->string('releve_s8');
            $table->string('releve_s9');
            $table->string('releve_s10');
            $table->unsignedBigInteger('id_condidat');
            $table->foreign('id_condidat')->references('id_condidat')->on('condidatures');
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
