<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (config('project.demo')) {
            $article = factory(Article::class, 1)->create([
                'status' => Article::FEATURED,
            ]);
            Article::find($article->first()->id)->attachTags(['php', 'laravel']);

            factory(Article::class, 20)->create([
                'status' => Article::ACTIVE,
            ]);
        }
    }
}
