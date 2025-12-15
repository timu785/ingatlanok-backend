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
        Schema::create('ingatlanok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria_id')->constrained('kategoriak')->onDelete('cascade');
            $table->text('leiras');
            $table->timestamp('datum')->useCurrent();
            $table->boolean('tehermentes');
            $table->integer('ar');
            $table->string('kepUrl', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanok');
    }
};
