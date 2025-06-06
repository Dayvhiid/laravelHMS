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
        Schema::table('images', function (Blueprint $table) {
                $table->string('path');       // relative path in storage/app/public
                $table->string('mime_type');  // image/jpeg, image/png …
                $table->integer('size');      // byte
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            Schema::dropIfExists('path');
        });
    }
};
