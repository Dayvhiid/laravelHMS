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
        Schema::create('treats', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->text('dosage')->nullable();
            $table->string('duration');
            $table->text('tab')->nullable();
            $table->text('gutt')->nullable();
            $table->text('oc')->nullable();
            $table->text('sur')->nullable();
            $table->text('rtc')->nullable();
            $table->text('remark')->nullable();
            $table->json('single_vision')->nullable();
            $table->json('bifocal')->nullable();
            $table->json('special_order')->nullable();
            $table->json('invisible')->nullable();
            $table->json('progressive')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treats');
    }
};
