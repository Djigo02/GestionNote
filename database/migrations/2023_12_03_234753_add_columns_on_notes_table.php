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
        Schema::table('notes', function (Blueprint $table){
            $table->unsignedBigInteger("id_apprenant");
            $table->unsignedBigInteger("id_matiere");
            $table->foreign("id_apprenant")->references("id")->on("apprenants");
            $table->foreign("id_matiere")->references("id")->on("matieres");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notes', function (Blueprint $table){
            $table->dropColumn(['id_apprenant','id_matiere']);
        });
    }
};
