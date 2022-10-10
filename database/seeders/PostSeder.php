<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;


class PostSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(100)->make()->each(function ($post) {
            $user = User::inRandomOrder()->first();

            $user->posts()->save($post);
        });
    }
}
