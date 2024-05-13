<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\MaintenanceRequest;
use App\Models\Property;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaintenanceRequest>
 */
class MaintenanceRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = MaintenanceRequest::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true), // Generates a random title
            'description' => $this->faker->sentence(), // Generates a random sentence
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']), // Randomly picks a status
            'property_id' => Property::factory(), // Assuming each maintenance request belongs to a property
        ];
    }
}
