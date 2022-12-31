<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Posts;

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
            "title" => "irakli samushia",
            "content" => "axali weli magaria",
            'image'=>'https://thumbs.dreamstime.com/b/happy-new-year-happy-new-year-greeting-card-colorful-fireworks-sparkling-burning-number-beautiful-holiday-web-banner-248472064.jpg',


        ]);
        Posts::create([
            "title" => "andria begiashvili",
            "content" => "axali proteini maq",
            'image'=>'https://storage.googleapis.com/bodybuilding-cms/media/2021/12/56a4a6c7-bbcom_new_signature_casein_choc_v4_grey-e1668803078298.jpg',
                    
        ]);

    }
}
