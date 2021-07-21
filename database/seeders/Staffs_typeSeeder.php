<?php

namespace Database\Seeders;
use App\Models\Staff_type;
use Illuminate\Database\Seeder;

class Staffs_typeSeeder extends Seeder
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
                'type' => 'Board',
            ],
            [
                'type' => 'Coordination',
            ],
            [
                'type' => 'Staffs PNV',
            ]
             
        ];
        try {
            foreach ($data as $item) {
                Staff_type::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
