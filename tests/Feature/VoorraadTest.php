<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producten;
use App\Models\Productcategorieen;
use App\Models\Magazijn;
use App\Models\Categorieen;

class VoorraadTest extends TestCase
{
    use RefreshDatabase; // Use database transactions for testing

    /** @test */
    public function test_can_create_a_product_with_manually_specified_category()
    {
        // Manually create a category
        $category = Categorieen::create([
            'naam' => 'Test Category',
            'isActief' => true,
            'opmerkingen' => 'Test category for unit test',
        ]);

        // Prepare the data for the request
        $data = [
            'productnaam' => 'Test Product',
            'streepjescode' => '1234567890123',
            'categorie' => $category->id,
            'aantalaanwezig' => 10,
            'opmerkingen' => 'Test opmerking',
        ];

        // Simulate a POST request to the store method
        $response = $this->post(route('voorraad.store'), $data);

        // Assert that the response from the overzicht page contains the success message
        $response->assertRedirect(route('voorraad.overzicht_producten'))->assertSessionHas('success', 'Product is succesvol toegevoegd');

        // Assert that the product was actually created in the database
        $this->assertDatabaseHas('producten', [
            'productnaam' => 'Test Product',
            'streepjescode' => '1234567890123',
            'isActief' => true,
            'opmerkingen' => 'Test opmerking',
        ]);

        // Assert that the product is associated with the created category (test if the foreign key works)
        $this->assertDatabaseHas('productcategorieen', [
            'product_Id' => Producten::where('productnaam', 'Test Product')->first()->id,
            'categorie_Id' => $category->id,
            'isActief' => true,
            'opmerkingen' => 'Test opmerking',
        ]);

        // Assert that the product has been added to the magazijn and check if the foreign key works
        $this->assertDatabaseHas('magazijn', [
            'product_Id' => Producten::where('productnaam', 'Test Product')->first()->id,
            'aantalaanwezig' => 10,
            'isActief' => true,
            'opmerkingen' => 'Test opmerking',
        ]);
    }
}
