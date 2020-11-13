<?php

namespace Database\Factories;

use App\Models\Checkout;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CheckoutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Checkout::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'ref_user_id' => DB::table('users')->inRandomOrder()->first()->id,
            'ref_book_id' => DB::table('books')->inRandomOrder()->first()->id,
            'checkout_date' => $this->faker->dateTime(),
            'due_date' => $this->faker->dateTime(),
            'return_date' => (rand(0,1) ? null : $this->faker->dateTime())
        ];
    }
}
