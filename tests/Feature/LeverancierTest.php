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
     * Test the index function.
     */
    public function testIndex()
    {
        $response = $this->get(route('leveranciers.index'));

        $response->assertStatus(200);
    }

    /**
     * Test the show function.
     */
    public function testShow()
    {
        $leverancier = Leverancier::create();

        $response = $this->get(route('leveranciers.show', $leverancier->id));

        $response->assertStatus(200);
    }

    /**
     * Test the create function.
     */
    public function testCreate()
    {
        $response = $this->get(route('leveranciers.create'));

        $response->assertStatus(200);
    }

    /**
     * Test the store function.
     */
    public function testStore()
    {
        $data = [
            'naam' => $this->faker->name,
            // Add other leverancier fields here
        ];

        $response = $this->post(route('leveranciers.store'), $data);

        $response->assertRedirect(route('leveranciers.index'));
        $this->assertDatabaseHas('leveranciers', $data);
    }

    /**
     * Test the update function.
     */
    public function testUpdate()
    {
        $leverancier = Leverancier::factory()->create();

        $updateData = [
            'naam' => 'Updated Name',
            // Add other fields to update here
        ];

        $response = $this->put(route('leveranciers.update', $leverancier->id), $updateData);

        $response->assertRedirect(route('leveranciers.index'));
        $this->assertDatabaseHas('leveranciers', $updateData);
    }

    /**
     * Test the delete function.
     */
    public function testDelete()
    {
        $leverancier = Leverancier::factory()->create();

        $response = $this->delete(route('leveranciers.destroy', $leverancier->id));

        $response->assertRedirect(route('leveranciers.index'));
        $this->assertSoftDeleted('leveranciers', ['id' => $leverancier->id]);
    }
}