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
        $table->string('choix_1', 100);
        $table->string('choix_2', 100);
        $table->string('choix_3', 100);
        $table->string('choix_4', 100);
        $table->string('choix_5', 100);
        $table->string('choix_6', 100);
        $table->string('choix_7', 100);
        $table->string('choix_8', 100);
        $table->string('choix_9', 100);
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
