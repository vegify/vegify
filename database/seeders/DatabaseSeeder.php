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
            'name' => 'john',
            'email' => 'john@vegify.app',
            'password' =>
                '$2y$10$pgbwlN546iwatij2Q5RmKuNgUaixpz3oDGvE1ZN.HeEBqfOoeL6VK',
        ]);
        \App\Models\Amount::factory()->create([
            'unit' => 'cup',
            'amount' => 0.25,
            'grams' => 30,
        ]);
        \App\Models\Amount::factory()->create([
            'unit' => 'cup',
            'amount' => 0.25,
            'grams' => 30,
        ]);
        \App\Models\Ingredient::factory()->create([
            'name' => 'Caputo 00 Flour',
            'description' =>
                'Professional flour; this 100% wheat flour is a culinary essential, perfect for long fermentation baking. Originating in Italy, our family company is dedicated to the gold standard of Neapolitan pizza flour established since 1924',
            'is_vegan' => true,
            'batch_size' => 1,
            'serving_size' => 1,
        ]);
        \App\Models\Amount::factory()
            ->count(4)
            ->create();
        \App\Models\Ingredient::factory()->create([
            'name' => 'Water',
            'description' =>
                "Water is an inorganic, transparent, tasteless, odorless, and nearly colorless chemical substance, which is the main constituent of Earth's hydrosphere and the fluids of all known living organisms (in which it acts as a solvent).",
            'is_vegan' => true,
        ]);
        \App\Models\Ingredient::factory()->create([
            'name' => 'Salt',
            'description' =>
                'Salt is essential for life in general, and saltiness is one of the basic human tastes. Salt is one of the oldest and most ubiquitous food seasonings, and salting is an important method of food preservation.',
            'is_vegan' => true,
        ]);
        \App\Models\Ingredient::factory()->create([
            'name' => 'Saf Instant Yeast',
            'description' =>
                'Widely used by professionals, SAF is the #1-selling yeast worldwide. Use in any recipe calling for active dry yeast: artisan loaves, pizza, sandwich bread, bagels, rolls, and more. No need to adjust the amount, use just as the recipe says.',
            'is_vegan' => true,
        ]);
        \App\Models\Ingredient::factory()->create([
            'name' => 'Biga',
            'description' =>
                "Biga is a type of pre-fermentation used in Italian baking. Many popular Italian breads, including ciabatta, are made using a biga. Using a biga adds complexity to the bread's flavor and is often used in breads that need a light, open texture with holes.",
            'is_vegan' => true,
        ]);
        \App\Models\Recipe::factory()->create([
            'as_ingredient_id' => 5,
            'creator_id' => 1,
            'subtitle' => 'this is gonna be biga',
        ]);

        \App\Models\User::factory()
            ->count(4)
            ->create();
        \App\Models\Ingredient::factory()
            ->count(11)
            ->create();
        \App\Models\Recipe::factory()
            ->count(4)
            ->create();
    }
}
