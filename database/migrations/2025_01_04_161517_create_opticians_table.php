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
        Schema::create('opticians', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('power')->nullable();
            $table->string('posted_from')->nullable();
            $table->string('card_number')->nullable();
            $table->string('frame_type')->nullable();
            $table->string('qty')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opticians');
    }
};
