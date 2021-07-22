<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
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
                'title' => 'PN Vietnam celebrated its 10th anniversary.',
                'img' => 'https://i.ibb.co/zb02cmq/PNV-2020-10-30-Graduation-Ceremony-10th-Anniversary-Mr-Hieu-s-Cam.jpg',
                'content' => '',
                'time' => '2020-10-27 07:00:00',
            ],

            [
                'title' => 'Visit of the French senates in Vietnam.',
                'img' => 'https://i.ibb.co/TgzjrmP/2019-Visit.png',
                'content' => '',
                'time' => '2019-09-24 02:00:00',
            ],

            [
                'title' => 'Participant in the APEC 2019.',
                'img' => 'https://i.ibb.co/LDTvwdJ/2019.png',
                'content' => '',
                'time' => '2019-07-20 10:00:00',
            ],
            [
                'title' => 'Visit of the French embassy in Vietnam.',
                'img' => 'https://i.ibb.co/3RMsKnq/2017-October.png',
                'content' => '',
                'time' => '2017-10-09 02:00:00',
            ],
            [
                'title' => 'New partnership with DaNang Vocational Training College.',
                'img' => 'https://i.ibb.co/y65mc0v/2017.png',
                'content' => 'Started a new partnership with Danang Vocational Training College to launch a 3-year training program with 3 majors: Web Development, Mobile Development, and Automation Testing.',
                'time' => '2017-08-24 08:00:00',

            ],
            [
                'title' => 'Launched new training program with Danang University of Technology ',
                'img' => 'https://i.ibb.co/ySDFQyx/2016.png',
                'content' => '',
                'time' => '2016-09-09 08:00:00',

            ],
            [
                'title' => 'A generation Y workshop',
                'img' => 'https://i.ibb.co/yFrx0Hh/2015.png',
                'content' => '',
                'time' => '2015-04-10 08:00:00',

            ],
            [
                'title' => 'DaNang IT Market & PN approach',
                'img' => 'https://i.ibb.co/q5WpqDR/2014.png',
                'content' => '',
                'time' => '2014-03-27 09:00:00',

            ],
            [
                'title' => 'Proposal of 2 majors: Dev & Web',
                'img' => 'https://i.ibb.co/bQCYfmv/2013.png',
                'content' => '',
                'time' => '2013-09-01 08:00:00',

            ],
            [
                'title' => '1st graduated class of 27 students.',
                'img' => 'https://i.ibb.co/KKYVppm/2012.png',
                'content' => '',
                'time' => '2012-10-27 08:00:00',
            ],

        ];
        try {
            foreach ($data as $item) {
                Event::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
