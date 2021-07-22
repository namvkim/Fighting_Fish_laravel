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
                'authorName' => 'Nguyen Dinh Long, Nguyen Thi Thu Ha, Ho Thi Nhu Quynh, Ho Thi Huong Sen',
                'topic' => 'Hotel',
                'technology' => 'React, API',
                'img' => 'https://i.ibb.co/W2WNCw3/hotel.png',
                'shortContent' => 'Building a website to book room in the hotel',
                'content' => 'When you travel , you want to book a cheap, beautiful room. We are here. We build a website to book room online',
                'link' => '',
            ],
            [
                'classes_id' => 3,
                'authorName' => 'Ha Mong Khang, Ho Thi Hang, Nguyen Hoang Huan, Nguyen Thi Thang',
                'topic' => 'Travel',
                'technology' => 'React, API, MySQL',
                'img' => 'https://i.ibb.co/8g0Nn0b/Travel.png',
                'shortContent' => 'Build a website to book travel ticket ',
                'content' => 'When everyone want to travel in the world, they do not know where they travel. They search on the website StartTravel which has got many beautiful places. ',
                'link' => 'https://github.com/hamongkhang/Travel_website.git',
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
