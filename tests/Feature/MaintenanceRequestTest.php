<?php

namespace Tests\Feature;

use App\Models\MaintenanceRequest;
use App\Models\Property;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MaintenanceRequestTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_retrieve_maintenance()
    {
        $maintenanceRequests = MaintenanceRequest::factory()->count(5)->create();
    
        $response = $this->getJson('/api/maintenance');

        $response->assertOk();
        $response->assertJsonCount(5);
    }

    public function test_can_store_maintenance_request()
    {
        $property = Property::factory()->create();

        $data = [
            'title' => 'Leaky Faucet',
            'description' => 'The kitchen sink is leaking',
            'status' => 'pending',
            'property_id' => $property->id
        ];

        $response = $this->postJson('/api/maintenance', $data);

        $response->assertCreated();
        $this->assertDatabaseHas('maintenance_requests', $data);
    }
}
