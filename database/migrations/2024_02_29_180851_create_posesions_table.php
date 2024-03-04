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
        Schema::create('posesions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("videojuego_id")->constrained("videojuegos");
            $table->foreignId("user_id")->constrained("users");
            $table->timestamps();
            $table->unique(["user_id", "videojuego_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posesiones');
    }
};
