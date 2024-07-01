<?php

namespace Tests\Feature;

use App\Models\VoedselPakket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoedselPakketTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_make_voedsel_pakket(): void
    {
        // tests if it can make a voedsel pakket
        VoedselPakket::create([
            'datum_uitgifte' => '2025-05-10',
            'datum_samenstelling' => '2024-12-30',
            'klant_id' => 7,
        ]);

        // tests if it can go to the voedsel pakket overzicht url
        $response = $this->get('/voedselpakket');

        $response->assertStatus(200);
    }
}
