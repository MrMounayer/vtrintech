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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("address")->nullable();
            $table->foreignId("user_id")->constraigned("users");
            $table->foreignId("vitrine_id")->constrained("vitrines");
            $table->foreignId("card_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
