<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\posts;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posts::create([
            "title" => "h",
            "body" => "sssssssssssss!"
        ]);
        Posts::create([
            "title" => "gasa",
            "body" => "aaaaaaaaa"
        ]);
    }
}
