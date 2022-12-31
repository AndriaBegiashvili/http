<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "name" => "jaja",
            "text" => "sssssssssssss!",
            "posts_id" => "1"
        ]);
        Comment::create([
            "name" => "fusi",
            "text" => "aaaaaaaaa",
            "posts_id" => "6"
        ]);
    }
}
