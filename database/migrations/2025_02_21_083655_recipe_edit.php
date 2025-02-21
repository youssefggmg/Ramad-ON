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
        Schema::table("Recipe",function (Blueprint $table){
            $table->dropColumn("image");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //nothing to do in this case
    }
};
