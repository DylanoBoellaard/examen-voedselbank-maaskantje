<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Random\Engine;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //create migration for klanten
        Schema::create('klanten', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            //foreign key for gezinssamenstelling
            $table->foreignId('gezinssamenstelling_id')
                ->references('id')
                ->on('gezinssamenstelling')
                ->onDelete('cascade');
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
            $table->engine('InnoDB');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop table klanten
        Schema::dropIfExists('klanten');
    }
};
