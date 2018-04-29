<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('learn_content', function (Blueprint $table) {
             $table->increments('id');
             $table->text('take_quiz_link');
             $table->text('title');
             $table->text('body');
             $table->unsignedInteger('author_id');
             $table->unsignedInteger('last_edited_by_id');
             $table->unsignedInteger('track_id');
             $table->string('slug');
             $table->timestamps();
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learn_content');
    }
}
