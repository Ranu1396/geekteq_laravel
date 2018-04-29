<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(TrackCategoriesSeeder::class);
        //$this->call(TracksSeeder::class);
        $this->call(MenuParentSeeder::class);
        $this->call(MenusSeeder::class);
    }
}
