<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('quiz_track', function (Blueprint $table) {
           $table->increments('id');
           $table->char('quiz_name', 100);
           $table->unsignedInteger('track_category_id');
           $table->char('icon_name');
           $table->text('next_location_link', 100);
       });
     }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_track');
    }
}
