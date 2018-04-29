<?php

use Illuminate\Database\Seeder;

class MenuParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('learn_sidebar_menu_parent')->insert([
        [
          'id' => 1,
          'parent_name' => 'functions',
          'track_id' => 1,
          'order' => 1
        ],
        [
          'id' => 2,
          'parent_name' => 'functions 2',
          'track_id' => 1,
          'order' => 2
        ],
        [
          'id' => 3,
          'parent_name' => 'functions 3',
          'track_id' => 1,
          'order' => 3
        ],
        [
          'id' => 4,
          'parent_name' => 'functions 4',
          'track_id' => 1,
          'order' => 4
        ]
      ]);

    }
}
