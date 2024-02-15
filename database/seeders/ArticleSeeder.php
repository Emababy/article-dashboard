<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Article::create([
            'title' => 'article 1',
            'content' => 'content article 1',
            'author_id' => 1,
            'category_id' => 1,
        ]);
    }
}
