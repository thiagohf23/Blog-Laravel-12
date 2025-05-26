<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Thiago de Sá',
            'username' => 'thiago_sa',
            'email' => 'test@example.com',
            'password' => '10203040',
        ]);

        $categories = [
            'Technology',
            'Health',
            'Food',
            'Education',
            'Finance',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        // Post::factory(100)->create();

    }
}
