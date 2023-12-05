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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string("nom",30);
            $table->unsignedBigInteger("id_professeur");
            $table->unsignedBigInteger("id_ue");
            $table->foreign('id_professeur')->references('id')->on("professeurs");
            $table->foreign('id_ue')->references('id')->on("ues");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
