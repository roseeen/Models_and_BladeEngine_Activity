<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => $this->faker->isbn10,
        'title' => $this->faker->sentence,
        'author' => $this->faker->name,
        'description' => $this->faker->paragraph,
        'date_published' => $this->faker->date,
        ];
    }
}
Book::factory()->count(20)->create();
