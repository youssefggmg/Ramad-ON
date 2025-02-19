<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('Recipe', function (Blueprint $table) {
            $table->unsignedBigInteger("fk_carigorei_id")->after("id");
            $table->foreign("fk_carigorei_id")->references("id")->on("Catigorie")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipe', function (Blueprint $table) {
            $table->dropForeign(['fk_carigorei_id']);
            $table->dropColumn('fk_carigorei_id');
        });
    }
};
