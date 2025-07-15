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
        Schema::create('note_relations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('note_id_from')->constrained('notes')->cascadeOnDelete();
            $table->unsignedBigInteger('note_id_to')->constrained('notes')->cascadeOnDelete();
            $table->enum('relation_type',['дополняет','противоречит','вдохновлён']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_relations');
    }
};
