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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('contact');
            $table->foreignId('contact_id')->constrained()->onDelete('cascade');
            $table->string('source');
            $table->string('destination');
            $table->string('busNumber');
            $table->string('seat');
            $table->string('amount');
            $table->string('departureDate');
            $table->string('departureTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
