<?php

use Illuminate\Database\Seeder;

class TrackCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('learn_track_categories')->insert([
        [
          'id' => 1,
          'name' => 'Language Tracks'
        ],
        [
          'id' => 2,
          'name' => 'Concept Tracks'
        ]
      ]);

    }
}
