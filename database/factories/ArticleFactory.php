<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->text(100);

        return [
            'title' => $title,
            'excerpt' => $this->faker->realText(200, 5),
            'body' => $this->faker->realText(1000, 5),
            'user_id' => self::factoryForModel(User::class),
            'slug' => Str::slug($title),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
