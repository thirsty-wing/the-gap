<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'industry' => fake()->bs(),
            'market_cap' => fake()->numerify(fake()->randomElement(['$###.#M', '$###.##M', '$#.##B', '$##.##M', '$#.##B', '$#.#B'])),
            'name' => fake()->unique()->company(),
            'sector' => fake()->word(),
            'symbol' => '$' . fake()->unique()->lexify(fake()->randomElement(['???', '????'])),
        ];
    }
}
