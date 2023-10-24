<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'type' => $this->faker->randomElement(['baju', 'celana']),
            'cond' => $this->faker->randomElement(['baik', 'layak', 'rusak']),
            'keterangan' => $this->faker->sentence(2, false),
            'kecacatan' => $this->faker->sentence(2, false),
            'stock' => $this->faker->randomNumber(2, false),
            'created_at' => now(),
            'updated_at' => now(),



            //
        ];
    }
}
