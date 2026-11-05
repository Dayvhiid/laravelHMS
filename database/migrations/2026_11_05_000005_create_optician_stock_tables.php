<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Optician stock book: categories (one stock card each) and the records under them.
     * Separate from frame/drug/lens quantities.
     */
    public function up(): void
    {
        Schema::create('stock_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('stock_records', function (Blueprint $table) {
            $table->id();
            // A category can only be deleted once it has no records.
            $table->foreignId('stock_category_id')->constrained('stock_categories')->restrictOnDelete();
            $table->date('date');
            $table->string('new_stock')->nullable();
            $table->string('name');
            $table->string('patient_code')->nullable();
            $table->string('booklet_no')->nullable();
            $table->unsignedInteger('qty_in')->default(0);
            $table->unsignedInteger('qty_out')->default(0);
            // Running balance within the category, recalculated whenever a record changes.
            $table->integer('balance')->default(0);
            $table->string('recorded_by')->nullable();
            $table->timestamps();

            $table->index(['stock_category_id', 'date', 'id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_records');
        Schema::dropIfExists('stock_categories');
    }
};
