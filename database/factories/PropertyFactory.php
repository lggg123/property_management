<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Property;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Property::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'address' => $this->faker->address,
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(100000, 500000)
        ];
    }
}
