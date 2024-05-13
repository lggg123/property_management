<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Lease;
use App\Models\Property;
use App\Models\Tenant;
use PHPUnit\Framework\Attributes\Test;

class LeaseFeatureTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    #[Test]
    public function a_lease_can_be_created()
    {
        $property = Property::factory()->create();
        $tenant = Tenant::factory()->create();
        
        $response = $this->postJson('/api/leases', [
            'property_id' => $property->id,
            'tenant_id' => $tenant->id,
            'start_date' => '2021-05-07',
            'end_date' => '2022-01-01',
            'monthly_rent' => 1000.99
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('leases', ['tenant_id' => $tenant->id]);
    }
}
