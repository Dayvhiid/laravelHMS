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
        Schema::create('patient_infos', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('state');
            $table->string('street');
            $table->string('occupation');
            $table->string('emergency_fullname');
            $table->string('emergency_relationship');
            $table->string('emergency_phone');
            $table->string('emergency_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_infos');
    }
};
