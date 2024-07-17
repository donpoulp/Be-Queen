<?php

use App\Models\Cadre;
use App\Models\Categorie;
use App\Models\Guidon;
use App\Models\MoyenDePropulsion;
use App\Models\Pedale;
use App\Models\Poignier;
use App\Models\PorteBagage;
use App\Models\Roue;
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
        Schema::create('custom_products', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignIdFor(Cadre::class);
            $table->foreignIdFor(MoyenDePropulsion::class);
            $table->foreignIdFor(Roue::class);
            $table->foreignIdFor(PorteBagage::class);
            $table->foreignIdFor(Guidon::class);
            $table->foreignIdFor(Pedale::class);
            $table->foreignIdFor(Poignier::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_products');
    }
};
