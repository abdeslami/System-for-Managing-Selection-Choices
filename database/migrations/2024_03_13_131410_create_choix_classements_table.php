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
        Schema::create('choix_classements', function (Blueprint $table) {
            $table->id();
            $table->string('choix_1');
            $table->string('choix_2');
            $table->string('choix_3');
            $table->string('choix_4');
            $table->string('choix_5');
            $table->string('choix_6');
            $table->string('choix_7');
            $table->string('choix_8');
            $table->string('choix_9');
            $table->string('slected_c1');
            $table->string('slected_c2');
            $table->string('slected_c3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choix_classements');
    }
};
