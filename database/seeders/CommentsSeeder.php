<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comments;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comments::create([
            "title" => "gasa",
            "comment" => "bego shokshi xar",
            "posts_id" => 1
        ]);
        Comments::create([
            "title" => "gasa",
            "comment" => "bego shokshi xar",
            "posts_id" => 1
        ]);
        Comments::create([
            "title" => "gasa",
            "comment" => "bego shokshi xar",
            "posts_id" => 1
        ]);
        
    }
}
