<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Links a "New Treatment Recorded" notification to the exact treatment, so the
     * optician dashboard can open it directly. Existing notifications stay null.
     */
    public function up(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->unsignedBigInteger('treat_id')->nullable()->after('pid')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropIndex(['treat_id']);
            $table->dropColumn('treat_id');
        });
    }
};
