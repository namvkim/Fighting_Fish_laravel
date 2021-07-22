<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'sonnamttt@gmail.com',
                'pass' => '123456',
                'name' => 'le son nam',
                'phone' => '0386005775',
            ],
        ];
        try {
            foreach ($data as $item) {
                Admin::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
