<?php

use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('learn_sidebar_menu')->insert([
        [
          'id' => 1,
          'sub_menu_name' => 'inline1',
          'content_id' => 1,
          'order' => 1,
          'menu_parent_id' => 1
        ],
        [
          'id' => 2,
          'sub_menu_name' => 'inline1',
          'content_id' => 1,
          'order' => 2,
          'menu_parent_id' => 1
        ],
        [
          'id' => 3,
          'sub_menu_name' => 'inline2',
          'content_id' => 1,
          'order' => 1,
          'menu_parent_id' => 2
        ],
        [
          'id' => 4,
          'sub_menu_name' => 'inline2',
          'content_id' => 1,
          'order' => 2,
          'menu_parent_id' => 2
        ]
      ]);

    }
}
