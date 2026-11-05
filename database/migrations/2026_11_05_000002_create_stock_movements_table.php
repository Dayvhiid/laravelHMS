<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * One row per change to a frame's stock quantity (stock received/removed, sale, manual edit, correction).
     * Name and type are copied in so the history still reads correctly if a frame is renamed or deleted.
     */
    public function up(): void
    {
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('frame_id')->nullable()->index();
            $table->string('item_name');
            $table->string('item_type')->nullable();
            $table->string('type', 30);
            $table->unsignedInteger('qty_in')->default(0);
            $table->unsignedInteger('qty_out')->default(0);
            $table->integer('balance_after');
            $table->string('patient_name')->nullable();
            $table->string('patient_code')->nullable();
            $table->string('reference')->nullable();
            $table->string('note')->nullable();
            $table->unsignedBigInteger('inventory_id')->nullable()->index();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->timestamps();

            $table->index(['frame_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
