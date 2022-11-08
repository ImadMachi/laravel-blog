<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
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
        $user = User::factory()->create([
            'name' => 'Imad Machi',
            'email' => 'imadoxmachi@gmail.com'
        ]);

        Tag::factory(10)->create();

        Category::factory(10)->create();

        Post::factory(10)->create(['user_id' => $user->id])->each(function ($post) {
            $post->tags()->attach(Tag::all()->random(3));
        });

        Comment::factory(20)->create(0);
    }
}
