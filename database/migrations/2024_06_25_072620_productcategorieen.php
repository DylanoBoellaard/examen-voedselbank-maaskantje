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
        Schema::dropIfExists('productcategorieen');
        Schema::create('productcategorieen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_Id') // Declare foreign key
                ->references('id')
                ->on('producten')
                ->onDelete('cascade'); // Cascade = if record in referenced table gets deleted, all related records in the current table will also be deleted
                $table->foreignId('categorie_Id') // Declare foreign key
                ->references('id')
                ->on('categorieen')
                ->onDelete('cascade');
            $table->boolean('isActief')->default(true);
            $table->string('opmerkingen', 250)->nullable();
            $table->timestamps(6);
            $table->engine = 'InnoDB';
        });

        // Insert values in table productcategorieen
        DB::table('productcategorieen')->insert([
            [
                'product_Id' => 1,
                'categorie_Id' => 1,
                'isActief' => 1,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
