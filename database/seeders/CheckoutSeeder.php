<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Checkout::factory()->count(100)->create();
    }
}
