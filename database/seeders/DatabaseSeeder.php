<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'John',
            'email' => 'john@vegify.app',
            'password' =>
                '$2y$10$pgbwlN546iwatij2Q5RmKuNgUaixpz3oDGvE1ZN.HeEBqfOoeL6VK',
        ]);
        \App\Models\Ingredient::factory()->create([
            'name' => 'test flour',
            'description' => 'flour. for tests.',
            'is_vegan' => true,
        ]);
        \App\Models\Recipe::factory()->create([
            'as_ingredient_id' => 1,
            'creator_id' => 1,
            'subtitle' => 'this is gonna be biga',
        ]);
        \App\Models\Amount::factory()->create([
            'unit' => 'cup',
            'amount' => 0.25,
            'grams' => 30,
        ]);
        \App\Models\User::factory()
            ->count(4)
            ->create();
        \App\Models\Ingredient::factory()
            ->count(4)
            ->create();
        \App\Models\Recipe::factory()
            ->count(4)
            ->create();
        \App\Models\Amount::factory()
            ->count(4)
            ->create();
    }
}
