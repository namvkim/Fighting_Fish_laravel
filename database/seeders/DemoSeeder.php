<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'email demo',
                'pass' => 'pass demo',
                'name' => 'name demo',
                'phone' => 'phone demo',
            ],
            [
                'email' => 'email demo',
                'pass' => 'pass demo',
                'name' => 'name demo',
                'phone' => 'phone demo',
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
