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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid')->unique();
            $table->string('full_name');
            $table->string('club_name');
            $table->string('shirt_size');
            $table->string('dietary_needs')->nullable();
            $table->string('golf_handicap')->nullable();
            $table->string('preferred_travel_time')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
