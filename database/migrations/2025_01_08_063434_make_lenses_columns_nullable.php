<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('lenses', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->integer('quantity')->nullable()->change();
            $table->string('sn')->nullable()->change();
            $table->string('price')->nullable()->change();
            $table->string('special_code')->nullable()->change();
            // Add other columns you want to make nullable
        });
    }

    public function down()
    {
        Schema::table('lenses', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->integer('quantity')->nullable(false)->change();
             $table->integer('sn')->nullable(false)->change();
              $table->integer('price')->nullable(false)->change();
               $table->integer('special_code')->nullable(false)->change();
            // Revert other columns
        });
    }
};