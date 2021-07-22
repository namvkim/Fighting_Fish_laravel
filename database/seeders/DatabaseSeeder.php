<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(GalleryTypeSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(News_typeSeeder::class);
        $this->call(NewsSeeder::class);
    }
}
