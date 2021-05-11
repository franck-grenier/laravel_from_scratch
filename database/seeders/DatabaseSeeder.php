<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
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
        $users = User::factory(10)->create();
        $tags = Tag::factory(25)->create();

        // Create articles for my 10 users
        foreach ($users as $user) {
            Article::factory(3)->create(['user_id' => $user->id]);
        }

        foreach (Article::all() as $article) {
            // Add tags on articles
            $article->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );

            // Add comments on articles
            $article->comments()->saveMany(Comment::factory(rand(1, 5))->create([
                'user_id' => $users->random(1)->pluck('id')[0],
                'article_id' => $article->id
            ]));
        }
    }
}
