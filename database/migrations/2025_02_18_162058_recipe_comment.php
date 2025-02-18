<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the table without the foreign key
        DB::statement("
            CREATE TABLE recipe_comment (
                id BIGSERIAL PRIMARY KEY, 
                recipe_id BIGINT NOT NULL
            ) INHERITS (comment);
        ");

        // Add the foreign key separately
        DB::statement("
            ALTER TABLE recipe_comment 
            ADD CONSTRAINT fk_recipe FOREIGN KEY (recipe_id) REFERENCES post(id) ON DELETE CASCADE;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_comment');
    }
};
