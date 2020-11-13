<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word . ' ' . $this->faker->word,
            'excerpt' => $this->faker->sentence,
            'isbn' => $this->faker->isbn10,
            'pages' => $this->faker->numberBetween(20,99999),
            'cost' => $this->faker->numberBetween(1,3000),
            'value' => $this->faker->numberBetween(0,3000),
            'released' => $this->faker->dateTime(),
            'status' => 0
        ];
    }
}
