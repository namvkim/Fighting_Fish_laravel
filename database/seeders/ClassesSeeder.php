<?php

namespace Database\Seeders;
use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
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
                'name' => 'PNV21A',
                
            ],
            [
                'name' => 'PNV21B',
                
            ],
            [
                'name' => 'PNV22A',
                
            ],
            [
                'name' => 'PNV22B',
                
            ],
            [
                'name' => 'PNV23A',
                
            ],
            [
                'name' => 'PNV23B',
                
            ],
         
           
            
        ];
        try {
            foreach ($data as $item) {
                Classes::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
