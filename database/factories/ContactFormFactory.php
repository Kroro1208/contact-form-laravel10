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
            'url' => substr($this->faker->url(), 0, 50),
            'gender' => $this->faker->boolean(),
            'age' => $this->faker->numberBetween(1, 6),
            'content' => $this->faker->realText(200),
        ];
    }
}
