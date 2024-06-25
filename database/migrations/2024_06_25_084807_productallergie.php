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
        Schema::create('productallergie', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->constrained()->references('id')->on('product');
            $table->integer('allergie_id')->constrained()->references('id')->on('allergie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
