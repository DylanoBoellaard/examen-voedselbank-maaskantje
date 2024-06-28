<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class createTest extends TestCase
{
    use RefreshDatabase;

    public function testStore()
    {
        $data = [
            'naam' => 'Test Naam',
            'aantalvolwassenen' => 2,
            'aantalkinderen' => 2,
            'aantalbabies' => 1,
            'huisnummer' => '123',
            'postcode' => '12345',
            'plaats' => 'Test Plaats',
            'straat' => 'Test Straat',
            'voornaam' => 'Test Voornaam',
            'tussenvoegsel' => 'Test Tussenvoegsel',
            'achternaam' => 'Test Achternaam',
            'email' => 'test@example.com',
            'telefoon' => '1234567890',
        ];

        $response = $this->post('klant/store', $data);

        $response->assertStatus(302); // assuming you're redirecting after store

        $this->assertDatabaseHas('klanten', [
            'naam' => 'Test Naam',
        ]);

        $this->assertDatabaseHas('gezinssamenstelling', [
            'aantalvolwassenen' => 2,
            'aantalkinderen' => 2,
            'aantalbabies' => 1,
        ]);
    }
}
