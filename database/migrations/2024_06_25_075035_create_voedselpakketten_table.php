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
        Schema::create('voedselpakketten', function (Blueprint $table) {
            $table->id();
            // date of given the voedsel pakket to the user
            $table->date('datum_uitgifte');
            // date of putting together a voedselpakket 
            $table->date('datum_samenstelling');
            // foreign key to the klanten table
            $table->integer('klant_id')->references('id')->on('klanten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voedselpakketten');
    }
};
