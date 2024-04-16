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
        Schema::create('vital2s', function (Blueprint $table) {
            $table->id();
            $table->string('patient_code');
            $table->string('srosphere')->nullable();
            $table->string('sroscyl')->nullable();
            $table->string('srosaxis')->nullable();
            $table->string('srosva')->nullable();
            $table->string('srosadd')->nullable();
            $table->string('srosnva')->nullable();
            $table->string('fossph')->nullable();
            $table->string('foscyl')->nullable();
            $table->string('fosaxis')->nullable();
            $table->string('fosva')->nullable();
            $table->string('fosadd')->nullable();
            $table->string('fosnva')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vital2s');
    }
};
