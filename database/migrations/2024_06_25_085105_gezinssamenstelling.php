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
        //create migration for gezinssamenstelling
        Schema::create('gezinssamenstelling', function (Blueprint $table) {
            $table->id();
            $table->integer('aantalvolwassenen');
            $table->integer('aantalkinderen');
            $table->integer('aantalbabies');
            $table->timestamps();
            $table->engine('InnoDB');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop table gezinssamenstelling
        Schema::dropIfExists('gezinssamenstelling');
    }
};
