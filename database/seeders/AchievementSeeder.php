<?php

namespace Database\Seeders;
use App\Models\Achievement;

use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'classes_id' => 1,
                'authorName' => 'Nguyen Ngoc Thao, Ho Thi Sim, Ho Thi Chau, Pham Van Manh',
                'topic' => 'Health+ App',
                'technology' => 'Python, React, Laravel, JS',
                'img' => 'https://i.ibb.co/JpzmM4j/IMG-20210719-115304.jpg',
                'shortContent' => 'Application of artificial intelligence in healthcare',
                'content' => 'Turn a used mobile phone into a dedicated healthcare doctor using software technology and artificial intelligence to create apps to install and use on the platform mobile',
                'link' => '',
            ],

            [
                'classes_id' => 3,
                'authorName' => 'Nguyen Dinh Long',
                'topic' => 'Hotel',
                'technology' => 'React, API',
                'img' => '',
                'shortContent' => 'Building a website to book room in the hotel',
                'content' => 'When you travel , you want to book a cheap, beautiful room. We are here. We build a website to book room online',
                'link' => '',
            ],
            [
                'classes_id' => 4,
                'authorName' => 'Le Son Nam',
                'topic' => 'Scratch',
                'technology' => 'Scratch',
                'img' => '',
                'shortContent' => 'Build a website to learn English',
                'content' => 'Everyone can play game to review English lesson in English ',
                'link' => '',
            ],
           
            
            
        ];
        try {
            foreach ($data as $item) {
                Achievement::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
