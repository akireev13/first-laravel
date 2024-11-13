<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Article::factory()->count(10)->create();
        Author::factory()->count(10)->create();
    }
}
