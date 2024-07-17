<?php

use App\Models\Categorie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->bigInteger('price');
            $table->string('image');
            $table->foreignIdFor(Categorie::class);
            $table->timestamps();

        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
       
    }
};
