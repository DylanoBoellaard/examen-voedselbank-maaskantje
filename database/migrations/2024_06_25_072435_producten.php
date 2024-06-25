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
        Schema::dropIfExists('producten');
        Schema::create('producten', function (Blueprint $table) {
            $table->id();
            $table->string('productnaam', 100);
            $table->string('streepjescode', 13,);
            $table->boolean('isActief')->default(true);
            $table->string('opmerkingen', 250)->nullable();
            $table->timestamps(6);
            $table->engine = 'InnoDB';
        });

        // Insert values in table allergeens
        DB::table('producten')->insert([
            [
                'productnaam' => 'Pinda',
                'streepjescode' => '1234567891234',
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
        Schema::dropIfExists('producten');
    }
};
