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
        schema::create("recipe_catigorie",function(Blueprint $table){
            $table->id();
            $table->integer("recipe_id");
            $table->integer("carigorie_id");
            $table->foreign("recipe_id")->references("id")->on("Recipe");
            $table->foreign("carigorie_id")->references("id")->on("Recipe");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("recipe_catigorie");
    }
};
