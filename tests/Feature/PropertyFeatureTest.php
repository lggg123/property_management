<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Property;

class PropertyFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
     /** #[Test] */
    public function test_a_property_can_be_added_through_api()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->postJson('/api/properties', [
            'title' => 'New Property',
            'address' => '123 Main St',
            'description' => 'Test description',
            'price' => 150000
        ]);

        $response->assertStatus(200);
        $this->assertCount(1, Property::all());
    }
}
