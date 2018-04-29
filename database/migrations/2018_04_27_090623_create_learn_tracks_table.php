<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('learn_tracks', function (Blueprint $table) {
          $table->increments('id');
          $table->char('track_name', 100);
          $table->unsignedInteger('track_category_id');
          $table->unsignedInteger('max_quiz_count');
          $table->char('track_icon_code', 50);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learn_tracks');
    }
}
