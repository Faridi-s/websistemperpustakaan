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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // Use plain unsignedBigInteger fields for foreign ids to avoid
            // ordering issues during fresh migrations in some setups.
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('publisher_id');
            $table->index('author_id');
            $table->index('publisher_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
