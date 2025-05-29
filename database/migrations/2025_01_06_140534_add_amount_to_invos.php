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
        Schema::table('invos', function (Blueprint $table) {
            $table->decimal('amount', 10, 2)->default(0)->after('discount')->comment('Total amount for the invoice');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invos', function (Blueprint $table) {
            //
        });
    }
};
