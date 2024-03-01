<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
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
            'title' => $this->faker->realText(50),
            'email' => $this->faker->unique()->safeEmail,
            'url' => $this->faker->url(),
            'gender' => $this->faker->randomElement([0, 1]),
            'age' => $this->faker->numberBetween(10, 80),
            'content' => $this->faker->realText(200),
        ];
    }
}
