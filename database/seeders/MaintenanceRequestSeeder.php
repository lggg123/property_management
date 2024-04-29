<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaintenanceRequest;

class MaintenanceRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MaintenanceRequest::create([
            'property_id' => '1',
            'title' => 'Fix water leak',
            'description' => 'Leak in ceiling of bathroom',
            'status' => 'pending'
        ]);
    }
}
