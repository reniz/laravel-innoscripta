<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'source' => $this->faker->company,
            'category' => 'Technology', // Set default category to "Technology"
            'published_at' => now(),
        ];
    }
}
