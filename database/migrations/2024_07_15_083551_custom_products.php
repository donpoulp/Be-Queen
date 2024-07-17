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
        Schema::create('custome_product', function (Blueprint $table) {
            $table->id()->primary();
            $table->integer('cadre_id');
            $table->integer('moyen_de_propulsion_id');
            $table->integer('roue_id');
            $table->integer('porte_bagage_id');
            $table->integer('guidon_id');
            $table->integer('poignier_id');
            $table->integer('pedale_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custome_product');
    }
};
