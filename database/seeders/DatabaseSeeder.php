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
            'password' => '$2y$10$pgbwlN546iwatij2Q5RmKuNgUaixpz3oDGvE1ZN.HeEBqfOoeL6VK',
        ]);
    }
}
