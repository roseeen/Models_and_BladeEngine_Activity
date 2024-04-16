<?php

namespace Database\Factories;

use App\Models\Models\MyBook;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = MyBook::class;

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
