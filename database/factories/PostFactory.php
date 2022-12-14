<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'slug' => $slug,
            'content' => fake()->paragraphs(5, true),
            'status' => fake()->randomElement(['published', 'draft']),
            'user_id' => User::first()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
