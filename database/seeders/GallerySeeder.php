<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
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
                'gallery_type_id' => 1,
                'title' => 'Ms.Vo Hoang Thuy Trang',
                'img' => 'https://i.ibb.co/xDCDG75/general-manager.jpg',
                'subtitle' => 'General Manager',
                'content' => '',
            ],
            [
                'gallery_type_id' => 2,
                'title' => 'Mr.Doan Trieu Thanh',
                'img' => '',
                'subtitle' => 'Selection Manager',
                'content' => '',
            ],
            [
                'gallery_type_id' => 2,
                'title' => 'Ms.Tran Thi Diep',
                'img' => 'https://i.ibb.co/WsXPHkR/Picture25.png',
                'subtitle' => 'Selection Officer',
                'content' => '',
            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Mr. Lucas Sindro',
                'img' => 'https://i.ibb.co/31TsQ0J/Picture24.png',
                'subtitle' => 'IT & Training Manager',
                'content' => '',

            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Ms.Tran Thi Thanh Truc',
                'img' => 'https://i.ibb.co/x7zFvH1/Picture34.png',
                'subtitle' => 'IT Trainer',
                'content' => '',

            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Mr.Vu Thanh Binh',
                'img' => 'https://i.ibb.co/kKg0xgD/Picture35.png ',
                'subtitle' => 'IT Admin',
                'content' => '',

            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Mr.Vo Cong Dinh',
                'img' => 'https://i.ibb.co/mhc3zqJ/Picture36.png',
                'subtitle' => 'IT & Training Manager',
                'content' => '',

            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Ms.Le Thi Hong Thuy',
                'img' => 'https://i.ibb.co/g7zWLfC/Picture41.png',
                'subtitle' => 'IT Trainer',
                'content' => '',

            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Ms.Tran Thi Khanh Uyen',
                'img' => 'https://i.ibb.co/0KdSxd2/Picture37.png',
                'subtitle' => 'English Coordinator',
                'content' => '',

            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Ms.Nguyen Thi Thuy',
                'img' => 'https://i.ibb.co/mHgJyQb/Picture21.png',
                'subtitle' => 'English Teacher',
                'content' => '',

            ],
            [
                'gallery_type_id' => 3,
                'title' => 'Mr.Tran Dong Nguyen',
                'img' => 'https://i.ibb.co/jfv3qYQ/Picture38.png',
                'subtitle' => 'PLT Coordinator',
                'content' => '',

            ],

            [
                'gallery_type_id' => 4,
                'title' => 'Ms.Huynh Thi Kim Oanh',
                'img' => 'https://i.ibb.co/FHYDCvH/Picture26.png',
                'subtitle' => 'External Relations Manager',
                'content' => '',

            ], [
                'gallery_type_id' => 4,
                'title' => 'Ms.Nguyen Phuoc Bao Tran',
                'img' => 'https://i.ibb.co/TMzPY6v/Picture27.png',
                'subtitle' => 'External Relations Officer',
                'content' => '',

            ],

            [
                'gallery_type_id' => 4,
                'title' => 'Ms.Tran Thi Tuyet Ngan',
                'img' => 'https://i.ibb.co/PFx178F/Picture28.png',
                'subtitle' => 'External Relations Officer',
                'content' => '',

            ],
            [
                'gallery_type_id' => 5,
                'title' => 'Ms. Dang Nguyen Uyen Phuong',
                'img' => 'https://i.ibb.co/sw3ySTD/Picture29.png',
                'subtitle' => 'Admin & HR & Finance Manager',
                'content' => '',

            ],
            [
                'gallery_type_id' => 5,
                'title' => 'Ms.Tran Thi My Ngoc',
                'img' => 'https://i.ibb.co/qWFKKRy/Picture31.png',
                'subtitle' => 'Admin & HR & Finance Officer',
                'content' => '',

            ],
            [
                'gallery_type_id' => 6,
                'title' => 'Ms.Chau My Ngoc',
                'img' => 'https://i.ibb.co/M2nsn9S/Picture30.png',
                'subtitle' => 'Education Manager',
                'content' => '',

            ],
            [
                'gallery_type_id' => 6,
                'title' => 'Mr. Nguyen Long Hai',
                'img' => 'https://i.ibb.co/k3dHJMw/Picture32.png',
                'subtitle' => 'Educator',
                'content' => '',

            ],

            [
                'gallery_type_id' => 6,
                'title' => 'Ms.Ho Thi Ngoc Nhai',
                'img' => 'https://i.ibb.co/0sVRVLG/Picture33.png',
                'subtitle' => 'Educator',
                'content' => '',

            ],

            [
                'gallery_type_id' => 7,
                'title' => 'PNV Giving',
                'img' => 'https://i.ibb.co/NjWgph1/giving.jpg',
                'subtitle' => 'The happiest people are not those getting more, but those giving more',
                'content' => 'PNV students had such great time working on their fundraising projects in Education subject. More than 7 million VND was collected and given back to community for charity purposes. Take a look at the happiest faces of PNV.',

            ],

            [
                'gallery_type_id' => 7,
                'title' => 'Merry Christmas',
                'img' => 'https://i.ibb.co/wwcDq0F/PNV22-B-1.jpg',
                'subtitle' => '',
                'content' => '',

            ],

        ];
        try {
            foreach ($data as $item) {
                Gallery::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
