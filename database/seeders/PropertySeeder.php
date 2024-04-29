<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Property::create([
            'title' => 'Luxury Apartment',
            'address' => '123 Main St. , Cityville',
            'description' => 'A spacious and modern apartment',
            'price' => 1500.00
        ]);
    }
}
