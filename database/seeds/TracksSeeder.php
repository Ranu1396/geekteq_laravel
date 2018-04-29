<?php

use Illuminate\Database\Seeder;

class TracksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('learn_tracks')->insert([
        [
          'id' => 1,
          'track_name' => 'C',
          'track_category_id'=> 1,
          'max_quiz_count'=> 20,
          'track_icon_code'=> 'fa-fa-codepie'
        ],
        [
          'id' => 2,
          'track_name' => 'C++',
          'track_category_id'=> 1,
          'max_quiz_count'=> 20,
          'track_icon_code'=> 'fa-fa-code'
        ],
        [
          'id' => 3,
          'track_name' => 'JAVA',
          'track_category_id'=> 1,
          'max_quiz_count'=> 20,
          'track_icon_code'=> 'HELLO'
        ],
        [
          'id' => 4,
          'track_name' => 'ALGORITHMS',
          'track_category_id'=> 2,
          'max_quiz_count'=> 20,
          'track_icon_code'=> 'HELLO'    
        ]
      ]);

    }
}
