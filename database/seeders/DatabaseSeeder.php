<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
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
        User::create([
            "name" => "Andre Sevtian",
            "username" => "sevtiandre",
            "email" => "andre@gmail.com",
            "password" => bcrypt('password'),
            "role" => "admin"
        ]);

        Post::factory()->count(30)->create();
        User::factory()->count(3)->create();

        Category::create([
            "name" => "Alphabet",
            "slug" => "alphabet"
        ]);

        Category::create([
            "name" => "Expression",
            "slug" => "expression"
        ]);

        Category::create([
            "name" => "Interaction",
            "slug" => "interaction"
        ]);
    }
}
