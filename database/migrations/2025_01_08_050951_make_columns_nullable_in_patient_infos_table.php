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
        Schema::table('patient_infos', function (Blueprint $table) {
            $table->string('patient_id')->nullable()->change();
            $table->string('first_name')->nullable()->change();
            $table->string('last_name')->nullable()->change();
            $table->date('date')->nullable()->change();
            $table->string('gender')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('state')->nullable()->change();
            $table->string('street')->nullable()->change();
            $table->string('occupation')->nullable()->change();
            $table->string('emergency_fullname')->nullable()->change();
            $table->string('emergency_relationship')->nullable()->change();
            $table->string('emergency_phone')->nullable()->change();
            $table->string('emergency_email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patient_infos', function (Blueprint $table) {
              $table->string('patient_id')->nullable(false)->change();
            $table->string('first_name')->nullable(false)->change();
            $table->string('last_name')->nullable(false)->change();
            $table->date('date')->nullable(false)->change();
            $table->string('gender')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('city')->nullable(false)->change();
            $table->string('state')->nullable(false)->change();
            $table->string('street')->nullable(false)->change();
            $table->string('occupation')->nullable(false)->change();
            $table->string('emergency_fullname')->nullable(false)->change();
            $table->string('emergency_relationship')->nullable(false)->change();
            $table->string('emergency_phone')->nullable(false)->change();
            $table->string('emergency_email')->nullable(false)->change();
        });
    }
};
