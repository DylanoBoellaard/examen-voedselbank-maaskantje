<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create table producten
        Schema::dropIfExists('productallergieen');
        Schema::create('productallergieen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('allergie_id');
            $table->boolean('isActief')->default(true);
            $table->string('opmerkingen', 250)->nullable();
            $table->timestamps(6);
            $table->engine = 'InnoDB';
        });

        Schema::table('productallergieen', function (Blueprint $table) {
            $table->foreign('product_id') // Declare foreign key
                ->references('id')
                ->on('producten')
                ->onDelete('cascade'); // Cascade = if record in referenced table gets deleted, all related records in the current table will also be deleted
            $table->foreign('allergie_id') // Declare foreign key
                ->references('id')
                ->on('allergieen')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productallergieen');
    }
};
