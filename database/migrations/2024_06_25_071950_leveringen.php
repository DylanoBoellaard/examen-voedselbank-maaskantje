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
        // Maakt de Leveringen tabel aan
        Schema::create('leveringen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancier_id');
            $table->foreignId('product_id');
            $table->date('leveringsdatum');
            $table->date('houdbaarheidsdatum');
            $table->rememberToken();
            $table->timestamps();
        }); 

        // Maakt een foreign key aan voor leverancier_id in de leveringen tabel
        schema::table( 'leveringen', function( Blueprint $table ) {
            $table->foreign( 'leverancier_id' )->references( 'id' )->on( 'leveranciers' );
            // $table->foreign( 'product_id' )->references( 'id' )->on( 'producten' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Verwijderd de Leveringen tabel
        Schema::dropIfExists('leveringen');
    }
};
