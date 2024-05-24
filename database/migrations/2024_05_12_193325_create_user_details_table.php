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
            $table->string('first_name');
            $table->string('surname');
            $table->string('tel');
            $table->string('email');
            $table->string('shirt_size');
            $table->string('dietary_needs')->nullable();
            $table->string('handicap_id')->nullable();
            $table->string('golf_club')->nullable();
            $table->string('handicap_index')->nullable();
            $table->string('emergency_contact_name')->nullable();
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
