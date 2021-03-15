<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => $this->faker->text(100),
            'excerpt' => $this->faker->realText(200, 5),
            'body' => $this->faker->realText(1000, 5),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
