<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;


class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tenant::create([
            'name' => 'Luxury Apartment',
            'email' => '123 Main St. , Cityville',
            'phone_number' => '1234567890',
        ]);
    }
}
