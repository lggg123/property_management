<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tenant;

class TenantFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    /** @test */
    public function a_tenant_can_be_created()
    {
        $response = $this->postJson('/api/tenants', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone_number' => '555-1234'
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tenants', ['email' => 'jane@example.com']);
    }
}
