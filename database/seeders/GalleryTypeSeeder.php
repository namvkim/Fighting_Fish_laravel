<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery_type;

class GalleryTypeSeeder extends Seeder
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
                'type' => 'Manager',
                
            ],
            [
                'type' => 'Selection',
                
            ],
            [
                'type' => 'IT & Training',
                
            ],
            [
                'type' => 'External Relation',
                
            ],
            [
                'type' => 'HR & Finance & Admin',
                
            ],
            [
                'type' => 'Education',
                
            ],
           
            [
                'type' => 'Activity',
                
            ],
            
            
        ];
        try {
            foreach ($data as $item) {
                Gallery_type::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
