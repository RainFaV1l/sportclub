<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age_limit_min' => $this->faker->numberBetween(1, 100),
            'age_limit_max' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(1, 1000000),
            'phone' => $this->faker->phoneNumber(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'photo' => 'public/sections/iHZkaBuJsK90xlXjY3JOQ2e4EE0M3ZPlDMnMFHar.jpg',
            'section_category_id' => $this->faker->numberBetween(1, 3),
            'trainer' => $this->faker->numberBetween(1, 3),
            'period' => $this->faker->numberBetween(1, 12),
        ];
    }
}
