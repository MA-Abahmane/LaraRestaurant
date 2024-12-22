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
        Schema::create('commande_plat', function (Blueprint $table) {
            $table->foreignId('commande_id')->constrained()->onDelete('cascade');
            $table->foreignId('plat_id')->constrained()->onDelete('cascade');
            $table->integer('nombre')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_plat');
    }
};