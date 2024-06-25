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
        // added the Leveranciers table
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id();
            $table->string('bedrijfsnaam')->max(100);
            $table->string('huisnummer')->max(10);
            $table->string('postcode')->max(6);
            $table->string('plaats')->max(50);
            $table->string('straat')->max(50);
            $table->string('voornaam')->max(100);
            $table->string('tussenvoegsel')->max(50);
            $table->string('achternaam')->max(50);
            $table->string('email')->max(50);
            $table->string('telefoon')->max(50);
            $table->rememberToken();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // deletes the Leveranciers table
        Schema::dropIfExists('leveranciers');
    }
};
