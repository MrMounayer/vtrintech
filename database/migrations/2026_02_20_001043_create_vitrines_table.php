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
        Schema::create('vitrines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('domain')->unique();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->json('links')->nullable();
            $table->string('fidelity_mode')->nullable();
            $table->string('fidelity_type')->nullable();
            $table->decimal('fidelity_rate', 10, 2)->default(0.00);
            $table->integer('fidelity_threshold')->default(0);
            $table->json('services')->nullable();
            $table->json('settings')->nullable();
            $table->string('whatsapp')->unique();
            $table->string('cta')->nullable();
            $table->string('cta_description')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('language')->default('en')->nullable();
            $table->string('template')->default('default')->nullable();
            $table->string('theme')->default('default')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vitrines');
    }
};
