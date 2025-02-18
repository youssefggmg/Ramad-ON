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
            CREATE TABLE post_comment (
                id BIGSERIAL PRIMARY KEY, 
                post_id BIGINT NOT NULL
            ) INHERITS (comment);
        ");

        // Add the foreign key separately
        DB::statement("
            ALTER TABLE post_comment 
            ADD CONSTRAINT fk_post FOREIGN KEY (post_id) REFERENCES post(id) ON DELETE CASCADE;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comment');
    }
};


