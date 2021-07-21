<?php

namespace Database\Seeders;

use App\Models\News_type;
use Illuminate\Database\Seeder;

class News_typeSeeder extends Seeder
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
                'type' => 'Sponsorship',
            ],
            [
                'type' => 'Internship',
            ],
            [
                'type' => 'Difficulties',
            ],
            [
                'type' => 'Activities',
            ],
            [
                'type' => 'Graduation',
            ]
        ];
        try {
            foreach ($data as $item) {
                News_type::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
