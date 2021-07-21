<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DemoSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(GalleryTypeSeeder::class);
        $this->call(GallerySeeder::class);

    }
}
