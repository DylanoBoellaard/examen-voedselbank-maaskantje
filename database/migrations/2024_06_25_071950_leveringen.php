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
        // added the Leveringen table
        Schema::create('leveringen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancier_id');
            $table->foreignId('product_id');
            $table->date('leveringsdatum');
            $table->date('houdbaarheidsdatum');
            $table->rememberToken();
            $table->timestamps();
        }); 

        // added the foreign key to the Leveringen table
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
        // deletes the Leveringen table
        Schema::dropIfExists('leveringen');
    }
};
