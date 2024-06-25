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
        Schema::create('klanten', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->integer('aantalvolwassenen');
            $table->integer('aantalkinderen');
            $table->integer('aantalbabies');
            $table->string('huisnummer');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('straat');
            $table->string('voornaam');
            $table->string('tussenvoegsel');
            $table->string('achternaam');
            $table->string('email');
            $table->string('telefoon');
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
