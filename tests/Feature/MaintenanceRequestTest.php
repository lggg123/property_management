<?php

namespace Tests\Feature;

use App\Models\MaintenanceRequest;
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
}
