<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Frame stock taking on /admin2:
     * - frame_id links a stock entry to its frame (existing rows stay null and behave as before)
     * - patient_name is recorded with each entry
     * - new_stock is no longer asked for, so it becomes optional (existing values are kept)
     */
    public function up(): void
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->unsignedBigInteger('frame_id')->nullable()->after('id')->index();
            $table->string('patient_name')->nullable()->after('name');
            $table->string('new_stock')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('inventories')->whereNull('new_stock')->update(['new_stock' => '']);

        Schema::table('inventories', function (Blueprint $table) {
            $table->string('new_stock')->nullable(false)->change();
            $table->dropColumn('patient_name');
            $table->dropIndex(['frame_id']);
            $table->dropColumn('frame_id');
        });
    }
};
