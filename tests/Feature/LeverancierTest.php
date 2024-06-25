<?php

namespace Tests\Feature;

use App\Models\Leverancier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeverancierTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test the show function.
     */
    public function testShow()
    {
        $leverancier = Leverancier::create([
                'id' => 1,
                'bedrijfsnaam' => 'Water',
                'huisnummer' => 10,
                'postcode' => '1234AB',
                'plaats' => 'Amsterdam',
                'telefoon' => '+316 1112345678',
                'voornaam' => 'Jan',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Veen',
                'email' => 'jan@gmail.com',
                'straat' => 'kerkerhout',
            ]);

        $response = $this->get(uri: '/leverancier/show');

        $response->assertStatus(200);
    }

    
}